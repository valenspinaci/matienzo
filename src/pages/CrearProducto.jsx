import { useState, useContext } from 'react';
import { useNavigate } from 'react-router-dom';
import { ProductContext } from '../context/ProductContext';

const CrearProducto = () => {
    const { agregarProducto } = useContext(ProductContext);
    const navigate = useNavigate();

    const [formData, setFormData] = useState({
        nombre: '',
        descripcion: '',
        precio: '',
        imagen: '',
        categoria: ''
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        const camposObligatorios = ['nombre', 'descripcion', 'precio', 'imagen', 'categoria'];
        for (const campo of camposObligatorios) {
            if (!formData[campo]) {
                alert(`El campo "${campo}" es obligatorio`);
                return;
            }
        }

        try {
            await agregarProducto({
                ...formData,
                precio: parseFloat(formData.precio),
                stock: formData.stock || 10,
                colour: formData.colour || 'sin especificar',
                origen: formData.origen || 'Argentina',
            });
            navigate('/admin');
        } catch (err) {
            console.error('Error al crear producto:', err);
        }
    };


    return (
        <div className="container my-5 d-flex flex-column justify-content-center align-items-center">
            <h1>Nuevo producto</h1>
            <form onSubmit={handleSubmit} className="col-10 col-md-6 col-lg-4 mt-3">
                <div className="mb-3">
                    <label htmlFor="nombre" className="form-label">Nombre de producto:</label>
                    <input type="text" name="nombre" className="form-control inputs-background" id="nombre" onChange={handleChange} />
                </div>

                <div className="mb-3">
                    <label htmlFor="descripcion" className="form-label">Descripción:</label>
                    <textarea name="descripcion" className="form-control inputs-background" id="descripcion" rows="3" onChange={handleChange}></textarea>
                </div>

                <div className="mb-3">
                    <label htmlFor="precio" className="form-label">Precio:</label>
                    <input type="number" name="precio" className="form-control inputs-background" id="precio" onChange={handleChange} />
                </div>

                <div className="mb-3">
                    <label htmlFor="imagen" className="form-label">Imagen (nombre de archivo):</label>
                    <input type="text" name="imagen" className="form-control inputs-background" id="imagen" onChange={handleChange} />
                </div>

                <div className="mb-3">
                    <label htmlFor="categoria" className="form-label">Categoría:</label>
                    <select className="form-select inputs-background" name="categoria" id="categoria" onChange={handleChange}>
                        <option value="">Selecciona una categoría</option>
                        <option value="mates">Mate</option>
                        <option value="termos">Termo</option>
                        <option value="materas">Matera</option>
                        <option value="bombillas">Bombilla</option>
                        <option value="yerbas">Yerba</option>
                        <option value="accesorios">Accesorio</option>
                    </select>
                </div>

                <div className="mb-3">
                    <label htmlFor="stock" className="form-label">Stock:</label>
                    <input type="number" name="stock" className="form-control inputs-background" id="stock" onChange={handleChange} />
                </div>

                <div className="mb-3">
                    <label htmlFor="colour" className="form-label">Color:</label>
                    <input type="text" name="colour" className="form-control inputs-background" id="colour" onChange={handleChange} />
                </div>

                <div className="mb-3">
                    <label htmlFor="origen" className="form-label">Origen:</label>
                    <input type="text" name="origen" className="form-control inputs-background" id="origen" onChange={handleChange} />
                </div>

                <button type="submit" className="btn boton-cta p-2 w-100">Agregar</button>
            </form>
        </div>
    );
};

export default CrearProducto;
