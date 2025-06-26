import {Routes, Route} from 'react-router-dom';
import Home from '../pages/Home';
import Productos from '../pages/Productos';
import Perfil from '../pages/Perfil';
import Contacto from '../pages/Contacto';
import Admin from '../pages/Admin';
import DetalleProducto from '../pages/DetalleProducto';
import Carrito from '../pages/Carrito';


const AppRouter = () =>{
    return (
        <Routes>
            <Route path = '/' element={<Home/>}/>
            <Route path= '/productos' element={<Productos/>}/>
            <Route path= '/producto/:id' element={<DetalleProducto />} />
            <Route path= '/contacto' element={<Contacto/>}/>
            <Route path= '/perfil' element={<Perfil/>}/>
            <Route path= '/admin' element={<Admin/>}/>
            <Route path= '/carrito' element={<Carrito/>}/>
        </Routes>
    )
};

export default AppRouter;