import { createContext, useState, useEffect } from "react";
import { jwtDecode } from "jwt-decode";
import { toast } from "react-toastify";

export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
    const [usuario, setUsuario] = useState(null);

    useEffect(() => {
        const token = localStorage.getItem("token");
        if (token) {
            try {
                const decoded = jwtDecode(token);
                setUsuario(decoded);
            } catch (e) {
                console.error("Token inválido:", e);
                localStorage.removeItem("token");
                setUsuario(null);
            }
        }
    }, []);

const login = async (email, password) => {
    try {
        const res = await fetch("http://localhost:3001/api/auth/login", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email, password }),
        });

        const data = await res.json();

        if (!res.ok) {
            toast.error(data.message || "Credenciales inválidas");
            return false;
        }

        localStorage.setItem("token", data.token);
        const decoded = jwtDecode(data.token);
        setUsuario(decoded);
        toast.success("Bienvenido/a");
        return true;

    } catch (error) {
        console.error("Error en login:", error);
        toast.error("Error en el servidor");
        return false;
    }
};


    const register = async ({ nombre, apellido,telefono, email, password }) => {
        try {
            const res = await fetch("http://localhost:3001/api/auth/register", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ nombre, apellido,telefono, email, password }),
            });

            const data = await res.json();

            if (res.ok) {
                toast.success("Usuario registrado correctamente");
                return true;
            } else {
                toast.error(data.message || "No se pudo registrar");
                return false;
            }
        } catch (error) {
            console.error("Error en register:", error);
            toast.error("Error en el servidor");
            return false;
        }
    };

    const logout = () => {
        localStorage.removeItem("token");
        setUsuario(null);
        toast.info("Sesión cerrada");
    };

    return (
        <AuthContext.Provider value={{ usuario, login, register, logout }}>
            {children}
        </AuthContext.Provider>
    );
};