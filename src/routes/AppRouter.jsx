import {Routes, Route} from 'react-router-dom';
import Home from '../pages/Home';
import Productos from '../pages/Productos';
import Perfil from '../pages/Perfil';
import Contacto from '../pages/Contacto';
import Admin from '../pages/Admin';


const AppRouter = () =>{
    return (
        <Routes>
            <Route path ="/" element={<Home/>}/>
            <Route path= '/productos' element={<Productos/>}/>
            <Route path= '/contacto' element={<Contacto/>}/>
            <Route path= '/perfil' element={<Perfil/>}/>
            <Route path= '/admin' element={<Admin/>}/>
        </Routes>
    )
};

export default AppRouter;