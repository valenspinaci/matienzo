const db = require('../models/db');

exports.getProductos = async (req, res) => {
try {
        const [rows] = await db.query(`
            SELECT p.*, 
                    COALESCE(AVG(o.calificacion), 0) AS promedio
            FROM productos p
            LEFT JOIN opiniones o ON o.producto_id = p.id
            GROUP BY p.id
        `);

        res.json(rows);
    } catch (error) {
        console.error("Error al obtener productos:", error);
        res.status(500).json({ msg: "Error al obtener los productos" });
    }
};

exports.getProductoPorId = async (req, res) => {
    const { id } = req.params;

    try {
        const [productos] = await db.query('SELECT * FROM productos WHERE id = ?', [id]);

        if (productos.length === 0) return res.status(404).json({ msg: 'Producto no encontrado' });

        res.json(productos[0]);
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al obtener producto' });
    }
};

exports.crearProducto = async (req, res) => {
    const { nombre, descripcion, precio, imagen, categoria, colour, origen, stock } = req.body;

    if (!nombre || !descripcion || !precio || !imagen || !categoria) {
        return res.status(400).json({ msg: 'Faltan campos obligatorios' });
    }

    try {
        await db.query(
            'INSERT INTO productos (nombre, descripcion, precio, imagen, categoria, colour, origen, stock) VALUES (?, ?, ?, ?, ?, ?, ?, ?)',
            [nombre, descripcion, precio, imagen, categoria, colour, origen, stock]
        );

        res.status(201).json({ msg: 'Producto creado con éxito' });
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al crear producto' });
    }
};

exports.editarProducto = async (req, res) => {
    const { id } = req.params;
    const { nombre, descripcion, precio, imagen, categoria, colour, origen, stock } = req.body;

    try {
        await db.query(
            'UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, imagen = ?, categoria = ?, colour = ?, origen = ?, stock = ? WHERE id = ?',
            [nombre, descripcion, precio, imagen, categoria, colour, origen, stock, id]
        );

        res.json({ msg: 'Producto actualizado correctamente' });
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al actualizar producto' });
    }
};

exports.eliminarProducto = async (req, res) => {
    const { id } = req.params;

    try {
        await db.query('DELETE FROM productos WHERE id = ?', [id]);
        res.json({ msg: 'Producto eliminado' });
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al eliminar producto' });
    }
};

exports.getDestacados = async (req, res) => {
    try {
        const [destacados] = await db.query(`
            SELECT p.*, AVG(o.calificacion) AS promedio
            FROM productos p
            JOIN opiniones o ON p.id = o.producto_id
            GROUP BY p.id
            ORDER BY promedio DESC
            LIMIT 3
        `);

        res.json(destacados);
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al obtener productos destacados' });
    }
};

