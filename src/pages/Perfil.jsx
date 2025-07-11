import { useContext, useEffect, useState } from 'react';
import { AuthContext } from '../context/AuthContext';
import { UsuarioContext } from '../context/UsuarioContext';
import fotoPerfil from '../assets/img/foto-perfil.png';

const Perfil = () => {
    const { usuario } = useContext(AuthContext);
    const { perfil, fetchPerfil, actualizarPerfil, loading } = useContext(UsuarioContext);

    const [nombre, setNombre] = useState('');
    const [apellido, setApellido] = useState('');
    const [email, setEmail] = useState('');
    const [telefono, setTelefono] = useState('');

    useEffect(() => {
        if (usuario) {
            fetchPerfil();
        }
    }, [usuario]);

    useEffect(() => {
        if (perfil) {
            setNombre(perfil.nombre || '');
            setApellido(perfil.apellido || '');
            setEmail(perfil.email || '');
            setTelefono(perfil.telefono || '');
        }
    }, [perfil]);

    const handleSubmit = (e) => {
        e.preventDefault();
        actualizarPerfil({ nombre, apellido, email, telefono });
    };

    if (!usuario) return <p className="container my-5">Debés iniciar sesión</p>;
    if (loading) return <p className="container my-5">Cargando datos del perfil...</p>;

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
                                <input type="text" className="form-control inputs-background" id="nombre" value={nombre} onChange={(e) => setNombre(e.target.value)} />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="apellido" className="form-label">Apellido</label>
                                <input type="text" className="form-control inputs-background" id="apellido" value={apellido} onChange={(e) => setApellido(e.target.value)} />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="email" className="form-label">Mail</label>
                                <input type="email" className="form-control inputs-background" id="email" value={email} onChange={(e) => setEmail(e.target.value)} />
                            </div>

                            <div className="col-8 mb-3">
                                <label htmlFor="telefono" className="form-label">Teléfono</label>
                                <input type="tel" className="form-control inputs-background" id="telefono" value={telefono} onChange={(e) => setTelefono(e.target.value)} />
                            </div>

                            <button type="submit" className="btn boton-cta p-2 mt-4 col-8">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </>
    );
};

export default Perfil;