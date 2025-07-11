import { useState, useContext } from 'react';
import { useNavigate } from 'react-router-dom';
import { AuthContext } from '../context/AuthContext';

const Login = () => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [recordarme, setRecordarme] = useState(false);
    const [error, setError] = useState('');
    const { login } = useContext(AuthContext);
    const navigate = useNavigate();

    const handleSubmit = async (e) => {
        e.preventDefault();
        const exito = await login(email, password);
        if (exito) {
            navigate("/");
        }
    };

    return (
        <div className="container fondo-app text-light my-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card bg-transparent border-light">
                        <div className="card-header bg-transparent border-light text-light">
                            Inicio de sesión
                        </div>
                        <div className="card-body">
                            <form onSubmit={handleSubmit}>
                                <div className="row mb-3">
                                    <label htmlFor="email" className="col-md-4 col-form-label text-md-end text-light">
                                        Email
                                    </label>
                                    <div className="col-md-6">
                                        <input
                                            id="email"
                                            type="email"
                                            className="form-control bg-transparent text-light"
                                            value={email}
                                            onChange={(e) => setEmail(e.target.value)}
                                            required
                                            autoFocus
                                        />
                                    </div>
                                </div>

                                <div className="row mb-3">
                                    <label htmlFor="password" className="col-md-4 col-form-label text-md-end text-light">
                                        Contraseña
                                    </label>
                                    <div className="col-md-6">
                                        <input
                                            id="password"
                                            type="password"
                                            className="form-control bg-transparent text-light"
                                            value={password}
                                            onChange={(e) => setPassword(e.target.value)}
                                            required
                                        />
                                    </div>
                                </div>

                                <div className="row mb-3">
                                    <div className="col-md-6 offset-md-4">
                                        <div className="form-check">
                                            <input
                                                className="form-check-input"
                                                type="checkbox"
                                                id="remember"
                                                checked={recordarme}
                                                onChange={() => setRecordarme(!recordarme)}
                                            />
                                            <label className="form-check-label text-light" htmlFor="remember">
                                                Recordarme
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                {error && (
                                    <div className="row mb-3">
                                        <div className="col-md-8 offset-md-4">
                                            <p className="text-danger">{error}</p>
                                        </div>
                                    </div>
                                )}

                                <div className="row mb-0">
                                    <div className="col-md-8 offset-md-4 d-flex flex-column flex-sm-row gap-2 align-items-start align-items-sm-center">
                                        <button type="submit" className="btn btn-warning">
                                            Ingresar
                                        </button>
                                        <a className="btn btn-link text-light">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                            </form>

                            <div className="text-center mt-3">
                                <p className="text-light">
                                    ¿No tenés una cuenta?{" "}
                                    <a className="text-warning text-decoration-underline" onClick={() => navigate("/registro")} role="button">
                                        Registrate
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Login;