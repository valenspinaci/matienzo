import { Link } from 'react-router-dom'

const Header = () => {
    return (
        <header>
            <nav className="navbar navbar-expand-lg bg-body-transparent">
                <div className="container-fluid mx-3">
                    <Link className="navbar-brand text-decoration-none color-texto-navbar" to="/">
                        matienzo
                    </Link>

                    <button
                        className="custom-toggler navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav">
                            <li className="nav-item mx-2">
                                <Link className="text-decoration-none color-texto-navbar" to="/">
                                    Inicio
                                </Link>
                            </li>
                            <li className="nav-item mx-2">
                                <Link className="text-decoration-none color-texto-navbar" to="/productos">
                                    Productos
                                </Link>
                            </li>
                            <li className="nav-item mx-2">
                                <Link className="text-decoration-none color-texto-navbar" to="/contacto">
                                    Contacto
                                </Link>
                            </li>

                            {/* Ítems extra en mobile */}
                            <li className="nav-item mx-2 d-lg-none">
                                <Link className="text-decoration-none color-texto-navbar" to="/carrito">
                                    Carrito
                                </Link>
                            </li>
                            <li className="nav-item mx-2 d-lg-none">
                                <Link className="text-decoration-none color-texto-navbar" to="/perfil">
                                    Mi perfil
                                </Link>
                            </li>
                            <li className="nav-item mx-2 d-lg-none">
                                <Link className="text-decoration-none color-texto-navbar" to="/admin">
                                    Administración
                                </Link>
                            </li>
                            <li className="nav-item mx-2 d-lg-none">
                                <Link className="text-decoration-none color-texto-navbar" to="/logout">
                                    Cerrar sesión
                                </Link>
                            </li>
                        </ul>
                    </div>

                    {/* Dropdown y carrito en desktop */}
                    <div className="btn-group dropstart d-none d-lg-flex">
                        <button
                            type="button"
                            className="btn bg-transparent color-texto-navbar dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Menú
                        </button>
                        <ul className="dropdown-menu background-dropdown">
                            <li>
                                <Link className="dropdown-item background-dropdown-item" to="/perfil">
                                    Mi perfil
                                </Link>
                            </li>
                            <li>
                                <Link className="dropdown-item background-dropdown-item" to="/admin">
                                    Administración
                                </Link>
                            </li>
                            <li>
                                <Link className="dropdown-item background-dropdown-item" to="/logout">
                                    Cerrar sesión
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <ul className="navbar-nav mx-2 d-none d-lg-flex flex-row">
                        <li className="nav-item align-self-center mx-2">
                            <Link className="text-decoration-none color-texto-navbar" to="/carrito">
                                <i className="fa-solid fa-cart-shopping"></i>
                            </Link>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    )
}

export default Header
