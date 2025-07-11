import { useState, useContext } from "react";
import { useNavigate } from "react-router-dom";
import { toast } from "react-toastify";
import { AuthContext } from "../context/AuthContext";

const Registro = () => {

    const { register } = useContext(AuthContext);
    const navigate = useNavigate();
    const [formData, setFormData] = useState({
        nombre: "",
        apellido: "",
        telefono: "",
        email: "",
        password: "",
        confirmarPassword: "",
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData(prev => ({ ...prev, [name]: value }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        const exito = await register({
            nombre: formData.nombre,
            apellido: formData.apellido,
            telefono: formData.telefono,
            email: formData.email,
            password: formData.password
        });


        if (formData.password !== formData.confirmarPassword) {
            toast.error("Las contraseñas no coinciden");
            return;
        }

        if (exito) {
            navigate("/");
        }
    };

    return (
        <div className="container my-5 d-flex flex-column justify-content-center align-items-center">
            <h1>Registro</h1>
            <form onSubmit={handleSubmit} className="col-10 col-md-6 col-lg-5 mt-3">
                <div className="mb-3">
                    <label className="form-label">Nombre</label>
                    <input type="text" name="nombre" className="form-control inputs-background" required onChange={handleChange} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Apellido</label>
                    <input type="text" name="apellido" className="form-control inputs-background" required onChange={handleChange} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Teléfono</label>
                    <input type="text" name="telefono" className="form-control inputs-background" required onChange={handleChange} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Email</label>
                    <input type="email" name="email" className="form-control inputs-background" required onChange={handleChange} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Contraseña</label>
                    <input type="password" name="password" className="form-control inputs-background" required onChange={handleChange} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Confirmar contraseña</label>
                    <input type="password" name="confirmarPassword" className="form-control inputs-background" required onChange={handleChange} />
                </div>

                <button type="submit" className="btn boton-cta p-2 w-100">Registrarse</button>
            </form>
        </div>
    );
};

export default Registro;
