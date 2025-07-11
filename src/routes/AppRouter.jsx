import { Routes, Route } from 'react-router-dom';
import Home from '../pages/Home';
import Productos from '../pages/Productos';
import Perfil from '../pages/Perfil';
import Contacto from '../pages/Contacto';
import Admin from '../pages/Admin';
import DetalleProducto from '../pages/DetalleProducto';
import Carrito from '../pages/Carrito';
import Login from '../pages/Login';
import Registro from '../pages/Registro';
import CrearProducto from '../pages/CrearProducto';
import ProtectedRoute from './ProtectedRoute';

const AppRouter = () => {

    return (
        <Routes>
            <Route path='/' element={<Home />} />
            <Route path='/productos' element={<Productos />} />
            <Route path='/producto/:id' element={<DetalleProducto />} />
            <Route path='/contacto' element={<Contacto />} />
            <Route path='/login' element={<Login />} />
            <Route path='/registro' element={<Registro />} />

            <Route
                path='/perfil'
                element={
                    <ProtectedRoute>
                        <Perfil />
                    </ProtectedRoute>
                }
            />

            <Route
                path='/carrito'
                element={
                    <ProtectedRoute roles={['cliente']}>
                        <Carrito />
                    </ProtectedRoute>
                }
            />

            <Route
                path='/admin'
                element={
                    <ProtectedRoute roles={['admin']}>
                        <Admin />
                    </ProtectedRoute>
                }
            />
            <Route
                path='/admin/crear'
                element={
                    <ProtectedRoute roles={['admin']}>
                        <CrearProducto />
                    </ProtectedRoute>
                }
            />

            <Route path="*" element={<h3 className='text-center py-5 my-5'>Error 404 - Página no encontrada</h3>} />
        </Routes>
    );
};

export default AppRouter;
