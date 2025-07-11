import { createContext, useEffect, useState } from "react";
import { toast } from "react-toastify";

export const ProductContext = createContext();

export const ProductProvider = ({ children }) => {
    const [productos, setProductos] = useState([]);

    const fetchProductos = async () => {
        try {
            const res = await fetch("http://localhost:3001/api/productos");
            const data = await res.json();
            if (res.ok) {
                setProductos(data);
            } else {
                toast.error("Error al obtener productos");
            }
        } catch (error) {
            console.error("Error:", error);
            toast.error("No se pudo conectar al servidor");
        }
    };

    useEffect(() => {
        fetchProductos();
    }, []);

    const obtenerProductos = () => productos;

    const obtenerDestacados = () => {
        return [...productos]
            .filter(p => p.promedio !== undefined)
            .sort((a, b) => b.promedio - a.promedio)
            .slice(0, 3);
    };

    const filtrarPorCategoria = (categoria) => {
        if (!categoria || categoria === "todos") return productos;
        return productos.filter(p => p.categoria.toLowerCase() === categoria.toLowerCase());
    };

const agregarProducto = async (nuevoProducto) => {
    try {
        const token = localStorage.getItem('token');

        const res = await fetch('http://localhost:3001/api/productos', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                Authorization: `Bearer ${token}`
            },
            body: JSON.stringify(nuevoProducto)
        });

        const data = await res.json();

        if (!res.ok) {
            throw new Error(data?.msg || 'Error al crear producto');
        }

        const resActualizado = await fetch('http://localhost:3001/api/productos');
        const productosActualizados = await resActualizado.json();
        setProductos(productosActualizados);

        toast.success('Producto creado correctamente');
    } catch (error) {
        console.error('Error al agregar producto:', error);
        toast.error('No se pudo crear el producto');
    }
};

const editarProducto = async (id, data) => {
    try {
        const token = localStorage.getItem("token");

        const res = await fetch(`http://localhost:3001/api/productos/${id}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                Authorization: `Bearer ${token}`,
            },
            body: JSON.stringify(data),
        });

        if (!res.ok) throw new Error("Error al editar producto");

        const productoActualizado = { id, ...data };

        setProductos(prev =>
            prev.map(p => (p.id === id ? productoActualizado : p))
        );

        toast.success("Producto actualizado");
    } catch (err) {
        console.error(err);
        toast.error("No se pudo actualizar el producto");
    }
};


    const eliminarProducto = async (id) => {
        try {
            const token = localStorage.getItem("token");
            const res = await fetch(`http://localhost:3001/api/productos/${id}`, {
                method: "DELETE",
                headers: {
                    Authorization: `Bearer ${token}`
                }
            });

            if (res.ok) {
                setProductos(prev => prev.filter(p => p.id !== id));
                toast.success("Producto eliminado");
            } else {
                toast.error("Error al eliminar producto");
            }
        } catch (error) {
            console.error(error);
            toast.error("Error al conectar con el servidor");
        }
    };

    return (
        <ProductContext.Provider
            value={{
                productos,
                obtenerProductos,
                obtenerDestacados,
                filtrarPorCategoria,
                agregarProducto,
                editarProducto,
                eliminarProducto,
                fetchProductos
            }}
        >
            {children}
        </ProductContext.Provider>
    );
};

