import { Link } from 'react-router-dom'

const ProductoCard = ({ producto }) => {
    const promedio = producto.calificaciones?.length > 0
        ? producto.calificaciones.reduce((a, b) => a + b, 0) / producto.calificaciones.length
        : 4 // valor por defecto

    const renderCalificacion = (rating) => {
        if (rating <= 1) return '/img/1estrellas.png'
        if (rating <= 2) return '/img/2estrellas.png'
        if (rating <= 3) return '/img/3estrellas.png'
        if (rating <= 4) return '/img/4estrellas.png'
        return '/img/5estrellas.png'
    }

    return (
        <div className="h-auto col-12 col-md-4 col-lg-3 mb-4">
            <div className="w-100 contenedor-claro d-flex flex-row justify-content-center rounded mb-2">
                <img className="mt-2 py-3 w-75" src={`/img/${producto.imagen}`} alt={producto.nombre} />
            </div>

            <h4>{producto.nombre.charAt(0).toUpperCase() + producto.nombre.slice(1)}</h4>

            <img className="w-25" src={renderCalificacion(promedio)} alt={`Calificación ${promedio}`} />

            <p className="fs-4 fw-semibold">${producto.precio}</p>

            <Link className="text-decoration-none color-texto-producto" to={`/producto/${producto.id}`}>
                <button className="btn boton-cta p-2 w-100">Ver producto</button>
            </Link>
        </div>
    )
}

export default ProductoCard
