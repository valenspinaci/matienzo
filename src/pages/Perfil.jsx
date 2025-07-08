import { useContext, useEffect, useState } from 'react'
import { AuthContext } from '../context/AuthContext'
import fotoPerfil from '../assets/img/foto-perfil.png'
import { toast } from 'react-toastify'

const Perfil = () => {
    const { usuario, logout } = useContext(AuthContext)
    const [loading, setLoading] = useState(true)
    const [nombre, setNombre] = useState('')
    const [apellido, setApellido] = useState('')
    const [email, setEmail] = useState('')
    const [telefono, setTelefono] = useState('')

    useEffect(() => {
        const fetchUserData = async () => {
            try {
                const token = localStorage.getItem('token')
                if (!token) {
                    toast.error("No se encontró token, por favor inicia sesión")
                    setLoading(false)
                    return
                }

                const res = await fetch(`http://localhost:3001/api/users/perfil`, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })

                if (!res.ok) {
                    const errorData = await res.json()
                    throw new Error(errorData.message || 'Error al cargar perfil')
                }

                const data = await res.json()
                setNombre(data.nombre)
                setApellido(data.apellido)
                setEmail(data.email)
                setTelefono(data.telefono)
            } catch (err) {
                console.error('Error en fetchUserData:', err)
                toast.error(err.message || "Error al conectarse con el servidor")
            } finally {
                setLoading(false)
            }
        }


        if (usuario?.id) {
            fetchUserData()
        }
    }, [usuario])

    const handleSubmit = async (e) => {
        e.preventDefault()

        try {
            const token = localStorage.getItem('token')

            const res = await fetch(`http://localhost:3001/api/users/perfil`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    Authorization: `Bearer ${token}`
                },
                body: JSON.stringify({
                    nombre,
                    apellido,
                    email,
                    telefono
                })
            })

            const data = await res.json()

            if (res.ok) {
                toast.success("Perfil actualizado con éxito")
            } else {
                toast.error(data?.msg || "No se pudo actualizar el perfil")
            }
        } catch (err) {
            console.error(err)
            toast.error("Error al actualizar")
        }
    }

    if (!usuario) return <p className="container my-5">Debés iniciar sesión</p>
    if (loading) return <p className="container my-5">Cargando datos del perfil...</p>

    return (
        <>
            <div className="col-12 d-flex justify-content-center align-items-center">
                <img className="col-8 col-md-6 col-lg-5 my-5" src={fotoPerfil} alt="perfil" />
            </div>

            <div className="col-12 d-flex flex-row justify-content-center align-items-center py-3 my-3">
                <div className="col-10 d-flex flex-column flex-md-row justify-content-center align-items-center">
                    <div className="col-12 col-md-5">
                        <form onSubmit={handleSubmit} className="col-12 d-flex flex-column align-items-center">

                            <div className="col-8 mb-3">
                                <label htmlFor="nombre" className="form-label">Nombre</label>
                                <input
                                    type="text"
                                    className="form-control inputs-background"
                                    id="nombre"
                                    value={nombre}
                                    onChange={(e) => setNombre(e.target.value)}
                                />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="apellido" className="form-label">Apellido</label>
                                <input
                                    type="text"
                                    className="form-control inputs-background"
                                    id="apellido"
                                    value={apellido}
                                    onChange={(e) => setApellido(e.target.value)}
                                />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="email" className="form-label">Mail</label>
                                <input
                                    type="email"
                                    className="form-control inputs-background"
                                    id="email"
                                    value={email}
                                    onChange={(e) => setEmail(e.target.value)}
                                />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="telefono" className="form-label">Teléfono</label>
                                <input
                                    type="tel"
                                    className="form-control inputs-background"
                                    id="telefono"
                                    value={telefono || ''}
                                    onChange={(e) => setTelefono(e.target.value)}
                                />
                            </div>

                            <button type="submit" className="btn boton-cta p-2 mt-4 col-8">
                                Guardar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Perfil