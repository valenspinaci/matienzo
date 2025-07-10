const db = require('../models/db');

exports.getOpinionesPorProducto = async (req, res) => {
    const { id } = req.params;

    const query = `
        SELECT o.comentario, o.calificacion, u.nombre 
        FROM opiniones o 
        JOIN usuarios u ON o.usuario_id = u.id 
        WHERE o.producto_id = ?
    `;

    try {
        const [result] = await db.query(query, [id]);
        res.json(result);
    } catch (err) {
        res.status(500).json({ msg: 'Error al obtener opiniones' });
    }
};

exports.crearOpinion = async (req, res) => {
    const { id } = req.params;
    const { comentario, calificacion } = req.body;
    const usuarioId = req.usuario.id;

    if (!comentario || !calificacion) {
        return res.status(400).json({ msg: 'Faltan campos obligatorios' });
    }

    try {
        const sql = `
            INSERT INTO opiniones (producto_id, usuario_id, comentario, calificacion)
            VALUES (?, ?, ?, ?)
        `;

        await db.query(sql, [id, usuarioId, comentario, calificacion]); // <- devuelve promesa
        res.status(201).json({ msg: 'Opinión registrada correctamente' });

    } catch (error) {
        res.status(500).json({ msg: 'Error al crear opinión' });
    }
};

