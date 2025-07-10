import { Link } from 'react-router-dom'

const ProductoCard = ({ producto }) => {
    const promedio = producto.total_opiniones > 0 ? producto.promedio : 4;

    const renderCalificacion = (rating) => {
        if (rating <= 1.5) return '/img/1estrellas.png'
        if (rating <= 2.5) return '/img/2estrellas.png'
        if (rating <= 3.5) return '/img/3estrellas.png'
        if (rating <= 4.5) return '/img/4estrellas.png'
        return '/img/5estrellas.png'
    }

    return (
        <div className="d-flex flex-column justify-content-between col-12 col-md-4 col-lg-3 mb-4">
            <div className="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                <img className="mt-2 py-3 w-75" src={`/img/${producto.imagen}`} alt={producto.nombre} />
            </div>

            <h4>{producto.nombre.charAt(0).toUpperCase() + producto.nombre.slice(1)}</h4>

            <div className="d-flex align-items-center gap-2 mb-2">
                <img className="w-25" src={renderCalificacion(promedio)} alt={`Calificación ${promedio}`} />
                {producto.total_opiniones > 0 && (
                    <small>({producto.total_opiniones})</small>
                )}
            </div>

            <p className="fs-4 fw-semibold">${producto.precio}</p>

            <Link className="text-decoration-none color-texto-producto" to={`/producto/${producto.id}`}>
                <button className="btn boton-cta p-2 w-100">Ver producto</button>
            </Link>
        </div>
    )
}

export default ProductoCard
