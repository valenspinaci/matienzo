import { useContext, useEffect, useState } from "react"
import { ProductContext } from "../context/ProductContext"
import { useNavigate } from "react-router-dom"
import AdminProductoCard from "../components/AdminProductoCard"

const Admin = () => {
    const { productos, editarProducto, eliminarProducto } = useContext(ProductContext)
    const navigate = useNavigate()
    const [productosEditables, setProductosEditables] = useState([])
    const [expandedId, setExpandedId] = useState(null)

    useEffect(() => {
        setProductosEditables(productos)
    }, [productos])

    const toggleAccordion = (id) => {
        setExpandedId(prev => (prev === id ? null : id))
    }

    const handleInputChange = (id, campo, valor) => {
        setProductosEditables(prev =>
            prev.map(p => p.id === id ? { ...p, [campo]: valor } : p)
        )
    }

    const handleGuardar = (id) => {
        const productoActualizado = productosEditables.find(p => p.id === id)
        editarProducto(id, productoActualizado)
    }

    const handleCrearProducto = () => {
        navigate('/admin/crear')
    }

    return (
        <div className="container my-5">
            <div className="d-flex flex-row justify-content-between">
                <h2>Administrar productos</h2>
                <button className="btn boton-cta" onClick={handleCrearProducto}>
                    Agregar producto +
                </button>
            </div>
            
            {productosEditables.map((producto) => (
                <AdminProductoCard
                    key={producto.id}
                    producto={producto}
                    expanded={expandedId === producto.id}
                    onToggle={() => toggleAccordion(producto.id)}
                    onChange={(campo, valor) => handleInputChange(producto.id, campo, valor)}
                    onGuardar={() => handleGuardar(producto.id)}
                    onEliminar={() => eliminarProducto(producto.id)}
                />
            ))}
        </div>
    )
}

export default Admin