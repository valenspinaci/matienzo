import { useParams } from 'react-router-dom'
import { useEffect, useState, useContext } from 'react'
import { CartContext } from '../context/CartContext'
import { ProductContext } from '../context/ProductContext'
import { AuthContext } from '../context/AuthContext'
import { OpinionContext } from '../context/OpinionContext'
import { toast } from 'react-toastify'

const DetalleProducto = () => {
    const { id } = useParams()
    const { agregarAlCarrito } = useContext(CartContext)
    const { usuario } = useContext(AuthContext)
    const { opiniones, fetchOpiniones, crearOpinion, loading } = useContext(OpinionContext)

    const [producto, setProducto] = useState(null)
    const [cantidad, setCantidad] = useState(1)
    const [comentario, setComentario] = useState('')
    const [calificacion, setCalificacion] = useState(5)
    const [vendidosFijos, setVendidosFijos] = useState(0)

    useEffect(() => {
        const obtenerProducto = async () => {
            try {
                const res = await fetch(`http://localhost:3001/api/productos/${id}`)
                const data = await res.json()
                setProducto(data)
                setVendidosFijos(data.vendidos ?? Math.floor(Math.random() * 100))

            } catch (err) {
                console.error('Error al cargar el producto', err)
                toast.error("No se pudo cargar el producto")
            }
        }

        obtenerProducto()
        fetchOpiniones(id)
    }, [id])

    const promedio = opiniones.length > 0
        ? opiniones.reduce((sum, o) => sum + o.calificacion, 0) / opiniones.length
        : 0

    const renderCalificacion = (rating) => {
        if (rating <= 1) return '/img/1estrellas.png'
        if (rating <= 2) return '/img/2estrellas.png'
        if (rating <= 3) return '/img/3estrellas.png'
        if (rating <= 4) return '/img/4estrellas.png'
        return '/img/5estrellas.png'
    }

    const handleAgregar = () => {
        if (!usuario || usuario.rol !== 'cliente') {
            toast.error('Debés iniciar sesión para agregar al carrito')
            return
        }

        agregarAlCarrito({ ...producto, cantidad })
    }

    const handleOpinionSubmit = async (e) => {
        e.preventDefault()

        if (!usuario) {
            toast.error("Debés iniciar sesión para opinar")
            return
        }

        if (!comentario || !calificacion) {
            toast.error("Comentario y calificación requeridos")
            return
        }

        await crearOpinion(id, comentario, calificacion, usuario.nombre)
        setComentario('')
        setCalificacion(5)
    }

    if (!producto) return <p className="container my-5">Cargando producto...</p>

    return (
        <div className="container my-5">

            <div className="row d-none d-lg-flex justify-content-between">
                <div className="col-6">
                    <p>Todos / {producto.categoria.charAt(0).toUpperCase() + producto.categoria.slice(1)}</p>
                </div>
                <div className="col-6 d-flex justify-content-end">
                    <p className="me-4">ID Producto: {producto.id}</p>
                    <p>Origen: {producto.origen || 'Argentina'}</p>
                </div>
            </div>

            <div className="d-lg-none col-10 d-flex flex-column px-5 my-2">
                <h2>{producto.nombre}</h2>
                <h2>${producto.precio}</h2>
            </div>

            <div className="row d-flex flex-column flex-lg-row">
                <div className="col-12 col-lg-6 d-flex justify-content-center mb-4">
                    <img
                        className="img-fluid w-75"
                        src={`/img/${producto.imagen}`}
                        alt={producto.nombre}
                        style={{ objectFit: "cover", aspectRatio: "1 / 1" }}
                    />
                </div>

                <div className="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start">
                    <h2 className="d-none d-lg-block">{producto.nombre}</h2>
                    <h2 className="fw-bold d-none d-lg-block">${producto.precio}</h2>
                    <hr className="col-9 border border-warning border-1" />

                    <div className="d-flex col-9 justify-content-between">
                        <div className="d-flex align-items-center">
                            <i className="fa-solid fa-star me-1"></i>
                            <p className="fw-semibold mb-0">{promedio.toFixed(1)}</p>
                        </div>
                        <p className="mb-0">
                            {opiniones.length > 0
                                ? `${opiniones.length} opiniones`
                                : 'Aún no hay opiniones'}
                        </p>
                    </div>

                    <div className="d-flex col-9 justify-content-between mt-2">
                        <p className="mb-0">{vendidosFijos} vendidos</p>
                        <p className={`mb-0 ${producto.stock > 0 ? '' : 'text-success'}`}>
                            {producto.stock > 0 ? 'En stock' : 'En stock'}
                        </p>
                    </div>

                    <div className="col-9 mt-3">
                        <p>Color: <span className="fw-semibold">{producto.colour}</span></p>
                    </div>

                    <div className="col-9 mt-2">
                        <p>Descripción:</p>
                        <p className="fw-bold">{producto.descripcion}</p>
                    </div>

                    {usuario?.rol !== 'admin' && (
                        <div className="col-9 mt-3 mb-4">
                            <label htmlFor="cantidad" className="form-label">Cantidad:</label>
                            <input
                                type="number"
                                id="cantidad"
                                className="form-control"
                                min="1"
                                max={producto.stock}
                                value={cantidad}
                                onChange={e => setCantidad(parseInt(e.target.value))}
                                placeholder={`${producto.stock} disponibles`}
                                required
                            />
                        </div>
                    )}

                    {usuario?.rol !== 'admin' && (
                        <div className="col-9 mb-5 d-flex gap-2">
                            <button className="btn boton-cta p-2 w-100" onClick={handleAgregar}>
                                <i className="fa-solid fa-cart-shopping"></i> Agregar al carrito
                            </button>
                        </div>
                    )}
                </div>
            </div>

            <div className="col-12 mt-5">
                <div className="col-10 mx-auto">
                    <h3>Opiniones</h3>

                    {loading ? (
                        <p>Cargando opiniones...</p>
                    ) : opiniones.length > 0 ? (
                        opiniones.map((op, i) => (
                            <div key={i} className="review-border rounded p-3 mb-3">
                                <img
                                    className="col-4 col-md-2 col-lg-1"
                                    src={renderCalificacion(op.calificacion)}
                                    alt={`Rating: ${op.calificacion}`}
                                />
                                <p className="fw-bold mb-1">{op.nombre}</p>
                                <p className="mb-0">{op.comentario}</p>
                            </div>
                        ))
                    ) : (
                        <p>Aún no hay opiniones</p>
                    )}

                    <div className="mt-4">
                        <h3>Nueva opinión</h3>
                        <form className="row" onSubmit={handleOpinionSubmit}>
                            <div className="col-12 col-md-9 mb-3">
                                <label htmlFor="comment" className="form-label">Comentario:</label>
                                <textarea
                                    className="form-control"
                                    id="comment"
                                    value={comentario}
                                    onChange={(e) => setComentario(e.target.value)}
                                    required
                                ></textarea>
                            </div>
                            <div className="col-12 col-md-3 mb-3">
                                <label htmlFor="rating" className="form-label">Puntaje:</label>
                                <select
                                    className="form-control"
                                    id="rating"
                                    value={calificacion}
                                    onChange={(e) => setCalificacion(Number(e.target.value))}
                                    required
                                >
                                    {[1, 2, 3, 4, 5].map(n => (
                                        <option key={n} value={n}>{n}</option>
                                    ))}
                                </select>
                            </div>
                            <div className="col-12">
                                <button type="submit" className="btn boton-cta p-2 w-100">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default DetalleProducto