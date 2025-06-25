import { useEffect, useState } from "react";
import { obtenerProductos } from "../models/productoModel";
import { Link } from 'react-router-dom';
import fotoProductos from '../assets/img/foto-productos.png';

const Productos = () => {

    const [productos, setProductos] = useState([]);

    useEffect(() => {
        obtenerProductos().then(setProductos);
    }, []);

    const renderCalificacion = (rating) => {
        if (rating <= 1) return '/img/1estrellas.png';
        if (rating <= 2) return '/img/2estrellas.png';
        if (rating <= 3) return '/img/3estrellas.png';
        if (rating <= 4) return '/img/4estrellas.png';
        return '/img/5estrellas.png';
    }

    const contadorProductos = () => {
        const count = productos.length;
        if (count > 1) return `${count} productos encontrados`;
        if (count === 1) return 'Un producto encontrado';
        return 'No hay productos';
    };

    return (
        <div>
            <div className="col-12 d-flex justify-content-center align-items-center">
                <img className="col-8 my-5" src={fotoProductos} alt="foto-producto" />
            </div>

            <ul className="d-flex col-8 flex-row flex-wrap justify-content-around list-unstyled col-md-12 py-3 py-md-5">
                {['Todo', 'Mates', 'Bombillas', 'Termos', 'Materas', 'Yerbas', 'Accesorios'].map((cat, i) => {
                    const slug = cat.toLowerCase();
                    const href = cat === 'Todo' ? '/products' : `/category/${slug}`;
                    return (
                        <li key={i}>
                            <Link className="text-decoration-none color-texto-navbar" to={href}>{cat}</Link>
                        </li>
                    );
                })}
            </ul>

            <div className="col-12 d-flex flex-row justify-content-around px-4 px-md-5 py-2 py-md-5">
                <h4 className="col-6 col-md-8 fs-5">{contadorProductos()}</h4>

                <div className="dropdown col-6 col-md-4 d-flex flex-row justify-content-end">
                    <button className="btn color-texto-navbar dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Ordenar por
                    </button>
                    <ul className="dropdown-menu background-dropdown">
                        <li>
                            <button className="dropdown-item background-dropdown-item" onClick={() => onSort('asc')}>menor precio</button>
                        </li>
                        <li>
                            <button className="dropdown-item background-dropdown-item" onClick={() => onSort('desc')}>mayor precio</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div className="d-flex col-11 row wrap pt-3 pb-5">
                {productos.length > 0 ? (
                    productos.map((producto) => (
                        <div key={producto.id} className="h-auto col-12 col-md-4 col-lg-3 mb-4">
                            <div className="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                                <img
                                    className="mt-2 py-3 w-75"
                                    src={`/img/${producto.imagen}`}
                                    alt=""
                                />
                            </div>
                            <h4>{producto.nombre.charAt(0).toUpperCase() + producto.nombre.slice(1)}</h4>
                            <img
                                className="w-25"
                                src={producto.calificaciones?.length > 0 ? renderCalificacion(
                                    producto.calificaciones.reduce((acc, r) => acc + r, 0) / producto.calificaciones.length
                                ) : '/assets/images/4estrellas.png'}
                                alt=""
                            />
                            <p className="fs-4 fw-semibold">${producto.precio}</p>
                            <Link className="text-decoration-none color-texto-producto" to={`/producto/${producto.id}`}>
                                <button className="btn boton-cta p-2 w-100">Ver producto</button>
                            </Link>
                        </div>
                    ))
                ) : (
                    <div className="col-12 col-md-4 col-lg-3 mx-auto d-flex flex-column align-items-center justify-content-center">
                        <h3>¡Lo sentimos!</h3>
                        <p>No existen productos de esta categoría</p>
                        <Link className="text-decoration-none color-texto-producto" to="/products">
                            <button className="btn boton-cta p-2 w-100">Ver otros</button>
                        </Link>
                    </div>
                )}
            </div>

        </div>
    );
}

export default Productos;