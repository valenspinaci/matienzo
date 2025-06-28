import { useContext, useState } from "react"
import { ProductContext } from "../context/ProductContext"
import AdminProductoCard from "../components/AdminProductoCard"

const Admin = () => {
    const {
        productos,
        editarProducto,
        eliminarProducto,
    } = useContext(ProductContext)

    const [expandedId, setExpandedId] = useState(null)

    const toggleAccordion = (id) => {
        setExpandedId(expandedId === id ? null : id)
    }

    const handleInputChange = (id, campo, valor) => {
        editarProducto(id, { [campo]: valor })
    }

    return (
        <div className="admin w-100 p-3">
            <div className="contenedor-oscuro rounded p-4">
                <div className="d-flex flex-row justify-content-between align-items-center">
                    <h4>Administración de Productos</h4>
                    <button className="btn boton-cta">
                        <span className="fw-bold">+</span> Agregar producto
                    </button>
                </div>

                {productos.map((producto) => (
                    <AdminProductoCard
                        key={producto.id}
                        producto={producto}
                        expanded={expandedId === producto.id}
                        onToggle={() => toggleAccordion(producto.id)}
                        onChange={(campo, valor) => handleInputChange(producto.id, campo, valor)}
                        onGuardar={() => console.log('Guardar lógico si hay persistencia')}
                        onEliminar={() => eliminarProducto(producto.id)}
                    />
                ))}
            </div>
        </div>
    )
}

export default Admin