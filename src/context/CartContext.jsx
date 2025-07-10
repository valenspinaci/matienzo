import { createContext, useState, useEffect, useContext } from 'react';
import { AuthContext } from './AuthContext';
import { toast } from 'react-toastify';

export const CartContext = createContext();

export const CartProvider = ({ children }) => {
    const { usuario } = useContext(AuthContext);
    const [carrito, setCarrito] = useState([]);
    const [cargando, setCargando] = useState(true);

    const fetchCarrito = async () => {
        if (!usuario) {
            setCarrito([]);
            setCargando(false);
            return;
        }

        try {
            const res = await fetch('http://localhost:3001/api/carrito', {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });

            const data = await res.json();
            if (res.ok) {
                setCarrito(data);
            } else {
                console.error(data.msg);
            }
        } catch (err) {
            console.error('Error al obtener el carrito:', err);
        } finally {
            setCargando(false);
        }
    };

    useEffect(() => {
        fetchCarrito();
    }, [usuario]);

    const agregarAlCarrito = async (producto) => {
        if (!usuario || usuario.rol !== 'cliente') {
            toast.error('Debés iniciar sesión como cliente para agregar productos');
            return;
        }

        try {
            const res = await fetch('http://localhost:3001/api/carrito', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                },
                body: JSON.stringify({
                    productoId: producto.id,
                    cantidad: producto.cantidad
                })
            });

            const data = await res.json();

            if (res.ok) {
                toast.success('Producto agregado al carrito');
                fetchCarrito();
            } else {
                toast.error(data.msg || 'No se pudo agregar al carrito');
            }
        } catch (err) {
            console.error(err);
            toast.error('Error al agregar producto al carrito');
        }
    };

    const eliminarDelCarrito = async (productoId) => {
        try {
            const res = await fetch(`http://localhost:3001/api/carrito/${productoId}`, {
                method: 'DELETE',
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });

            if (res.ok) {
                toast.success('Producto eliminado del carrito');
                fetchCarrito();
            } else {
                toast.error('No se pudo eliminar el producto');
            }
        } catch (err) {
            console.error(err);
            toast.error('Error al eliminar del carrito');
        }
    };

    const vaciarCarrito = async () => {
        try {
            const res = await fetch('http://localhost:3001/api/carrito', {
                method: 'DELETE',
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });

            if (res.ok) {
                toast.success('Carrito vaciado');
                setCarrito([]);
            } else {
                toast.error('No se pudo vaciar el carrito');
            }
        } catch (err) {
            console.error(err);
            toast.error('Error al vaciar el carrito');
        }
    };

    return (
        <CartContext.Provider value={{
            carrito,
            cargando,
            agregarAlCarrito,
            eliminarDelCarrito,
            vaciarCarrito
        }}>
            {children}
        </CartContext.Provider>
    );
};
