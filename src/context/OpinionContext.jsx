import { createContext, useState } from 'react';
import { toast } from 'react-toastify';

export const OpinionContext = createContext();

export const OpinionProvider = ({ children }) => {
    const [opiniones, setOpiniones] = useState([]);
    const [loading, setLoading] = useState(false);

    const fetchOpiniones = async (productoId) => {
        try {
            setLoading(true);
            const res = await fetch(`http://localhost:3001/api/opiniones/${productoId}`);
            if (!res.ok) throw new Error('Error al obtener opiniones');
            const data = await res.json();
            setOpiniones(data);
        } catch (err) {
            console.error(err);
            toast.error('No se pudieron cargar las opiniones');
        } finally {
            setLoading(false);
        }
    };

    const crearOpinion = async (productoId, comentario, calificacion, nombreUsuario) => {
        try {
            const token = localStorage.getItem('token');
            const res = await fetch(`http://localhost:3001/api/opiniones/${productoId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Authorization: `Bearer ${token}`
                },
                body: JSON.stringify({ comentario, calificacion })
            });

            if (!res.ok) throw new Error('Error al enviar la opinión');

            toast.success('Opinión enviada!');
            setOpiniones(prev => [
                ...prev,
                { comentario, calificacion, nombre: nombreUsuario }
            ]);
        } catch (err) {
            console.error(err);
            toast.error(err.message || 'Error al enviar opinión');
        }
    };

    return (
        <OpinionContext.Provider value={{ opiniones, fetchOpiniones, crearOpinion, loading }}>
            {children}
        </OpinionContext.Provider>
    );
};
