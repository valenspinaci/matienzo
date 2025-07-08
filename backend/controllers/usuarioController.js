const db = require('../models/db');

const getUsuarioPorId = async (req, res) => {
    const id = req.usuario.id;

    try {
        const [result] = await db.query(
            'SELECT id, nombre, apellido, email, telefono, rol FROM usuarios WHERE id = ?',
            [id]
        );

        if (result.length === 0) {
            return res.status(404).json({ msg: 'Usuario no encontrado' });
        }

        res.json(result[0]);
    } catch (err) {
        console.error('Error al consultar la base de datos:', err);
        res.status(500).json({ msg: 'Error de servidor' });
    }
};

const actualizarPerfil = async (req, res) => {
    const id = req.usuario.id;
    const { nombre, apellido, email, telefono } = req.body;

    if (!nombre || !apellido || !email || !telefono) {
        return res.status(400).json({ msg: 'Faltan campos obligatorios' });
    }

    try {
        const [result] = await db.query(
            'UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, telefono = ? WHERE id = ?',
            [nombre, apellido, email, telefono, id]
        );

        res.json({ msg: 'Usuario actualizado correctamente' });
    } catch (err) {
        console.error('Error al actualizar usuario:', err);
        res.status(500).json({ msg: 'Error de servidor' });
    }
};

module.exports = {
    getUsuarioPorId,
    actualizarPerfil
};
