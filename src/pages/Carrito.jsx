import { useContext, useState } from 'react';
import { CartContext } from '../context/CartContext';
import { Link } from 'react-router-dom';
import fotoCarrito from '../assets/img/foto-carrito.png';

const Carrito = () => {
    const { carrito, eliminarDelCarrito, vaciarCarrito } = useContext(CartContext)
    const [mostrarResumen, setMostrarResumen] = useState(false)
    const envioFijo = 300

    const totalProductos = carrito.reduce((acc, p) => acc + p.precio * p.cantidad, 0)
    const totalFinal = totalProductos + (carrito.length > 0 ? envioFijo : 0)
    const envioPorItem = carrito.length > 0 ? Math.round(envioFijo / carrito.length) : 0

    return (
        <div className='my-5'>
            <div className="col-12 d-flex justify-content-center align-items-center">
                <img className="col-6" src={fotoCarrito} alt="Carrito" />
            </div>


            {carrito.length === 0 ? (
                <div className="d-flex justify-content-center align-items-center mt-5">
                    <div className="col-10 col-md-6">
                        <h3 className="text-center">¡El carrito está vacío!</h3>
                        <p className="text-center">
                            Recorre la tienda de Matienzo y seguramente la próxima vez que vengas vas a encontrar algo que te guste
                        </p>
                        <Link to="/productos">
                            <button className="btn boton-cta p-2 col-12">Ver productos</button>
                        </Link>
                    </div>
                </div>
            ) : (
                <div className="w-100 px-2 px-md-5 my-5 d-flex flex-column flex-lg-row justify-content-between gap-3">
                    <div className="col-12 col-lg-8 d-flex flex-column gap-3">
                        {carrito.map((item, index) => (
                            <div key={index} className="contenedor-oscuro rounded d-flex flex-column p-3">
                                <div className="d-flex flex-row justify-content-between align-items-center">
                                    <div className="d-flex flex-row align-items-center gap-3 col-8">
                                        <img src={`/img/${item.imagen}`} alt={item.nombre} className="col-3" />
                                        <h4 className="mb-0">{item.nombre}</h4>
                                    </div>
                                    <div className="col-4 d-flex justify-content-end align-items-center pe-3">
                                        <h4 className="mb-0">${item.precio}</h4>
                                        <h5 className="mb-0 ps-2">(x{item.cantidad})</h5>
                                    </div>
                                </div>

                                <div className="d-flex flex-row justify-content-between align-items-center pt-3 pe-3 borde-producto-arriba">
                                    <h5 className="ps-4">Envío</h5>
                                    <h5>${envioPorItem}</h5>
                                </div>
                            </div>
                        ))}
                    </div>


                    <div className="col-12 col-lg-4">
                        <div className="p-3 contenedor-oscuro rounded">
                            <h4>Resumen</h4>
                            <hr className="borde-resumen" />
                            <div className="d-flex justify-content-between">
                                <p>Productos</p>
                                <p>${totalProductos}</p>
                            </div>
                            <div className="d-flex justify-content-between">
                                <p>Envío</p>
                                <p>${envioFijo}</p>
                            </div>
                            <div className="d-flex justify-content-between">
                                <h5>Total</h5>
                                <h5>${totalFinal}</h5>
                            </div>
                        </div>

                        <div className="d-flex flex-column gap-2 my-3">
                            <button className="btn boton-cta" onClick={() => setMostrarResumen(true)}>Continuar compra</button>
                            <button className="btn boton-oscuro" onClick={vaciarCarrito}>Vaciar carrito</button>
                        </div>
                    </div>
                </div>
            )}


            {mostrarResumen && (
                <div className="modal d-block" tabIndex="-1" onClick={() => setMostrarResumen(false)}>
                    <div className="modal-dialog fondo-app" onClick={e => e.stopPropagation()}>
                        <div className="modal-content fondo-app">
                            <div className="modal-header">
                                <h5 className="modal-title">Resumen de la compra</h5>
                                <button type="button" className="btn-close btn-close-white" onClick={() => setMostrarResumen(false)} />
                            </div>
                            <div className="modal-body">
                                <h3>Productos:</h3>
                                {carrito.map(item => (
                                    <p key={item.id}>
                                        {item.nombre} (x{item.cantidad}) : <span className="fw-semibold">${item.precio * item.cantidad}</span>
                                    </p>
                                ))}
                                <p>Envío: ${envioFijo}</p>
                                <hr />
                                <p className="fs-4">Total: <span className="fw-bold">${totalFinal}</span></p>
                                <div className="modal-footer">
                                    <button type="button" className="btn boton-oscuro" onClick={() => setMostrarResumen(false)}>Cancelar</button>
                                    <button type="button" className="btn boton-cta" onClick={() => {
                                        alert("Compra simulada confirmada 🎉")
                                        vaciarCarrito()
                                        setMostrarResumen(false)
                                    }}>Confirmar compra</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            )}
        </div>
    )
}

export default Carrito;
