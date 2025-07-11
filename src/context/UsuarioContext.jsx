import { createContext, useState, useContext } from "react";
import { AuthContext } from "./AuthContext";
import { toast } from "react-toastify";

export const UsuarioContext = createContext();

export const UserProvider = ({ children }) => {
    const [perfil, setPerfil] = useState(null);
    const [loading, setLoading] = useState(false);

    const fetchPerfil = async () => {
        try {
            setLoading(true);
            const token = localStorage.getItem("token");
            const res = await fetch("http://localhost:3001/api/users/perfil", {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });

            if (!res.ok) throw new Error("No se pudo obtener el perfil");

            const data = await res.json();
            setPerfil(data);
        } catch (err) {
            console.error(err);
            toast.error(err.message || "Error al obtener perfil");
        } finally {
            setLoading(false);
        }
    };

    const actualizarPerfil = async (datos) => {
        try {
            const token = localStorage.getItem("token");
            const res = await fetch("http://localhost:3001/api/users/perfil", {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                    Authorization: `Bearer ${token}`,
                },
                body: JSON.stringify(datos),
            });

            const data = await res.json();

            if (!res.ok) throw new Error(data.msg || "Error al actualizar perfil");

            toast.success("Perfil actualizado");
            setPerfil(data); 
        } catch (err) {
            console.error(err);
            toast.error(err.message || "Error al actualizar perfil");
        }
    };

    return (
        <UsuarioContext.Provider value={{ perfil, fetchPerfil, actualizarPerfil, loading }}>
            {children}
        </UsuarioContext.Provider>
    );
};
