const db = require('../models/db');

exports.obtenerCarrito = async (req, res) => {
    const usuarioId = req.usuario.id;

    try {
        const [rows] = await db.query(`
            SELECT c.producto_id, c.cantidad, p.nombre, p.precio, p.imagen, p.stock
            FROM carrito c
            JOIN productos p ON c.producto_id = p.id
            WHERE c.usuario_id = ?
        `, [usuarioId]);

        res.json(rows);
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al obtener el carrito' });
    }
};

exports.agregarProducto = async (req, res) => {
    const usuarioId = req.usuario.id;
    const { productoId, cantidad } = req.body;

    if (!productoId || !cantidad) {
        return res.status(400).json({ msg: 'Faltan datos' });
    }

    try {
        // Verificar si ya existe
        const [rows] = await db.query(
            'SELECT cantidad FROM carrito WHERE usuario_id = ? AND producto_id = ?',
            [usuarioId, productoId]
        );

        if (rows.length > 0) {
            await db.query(
                'UPDATE carrito SET cantidad = cantidad + ? WHERE usuario_id = ? AND producto_id = ?',
                [cantidad, usuarioId, productoId]
            );
        } else {
            await db.query(
                'INSERT INTO carrito (usuario_id, producto_id, cantidad) VALUES (?, ?, ?)',
                [usuarioId, productoId, cantidad]
            );
        }

        res.json({ msg: 'Producto agregado al carrito' });
    } catch (err) {
        console.error(err);
        res.status(500).json({ msg: 'Error al agregar al carrito' });
    }
};

exports.vaciarCarrito = async (req, res) => {
    const usuarioId = req.usuario.id;

    try {
        await db.query('DELETE FROM carrito WHERE usuario_id = ?', [usuarioId]);
        res.json({ msg: 'Carrito vaciado' });
    } catch (err) {
        res.status(500).json({ msg: 'Error al vaciar carrito' });
    }
};

exports.eliminarProducto = async (req, res) => {
    const usuarioId = req.usuario.id;
    const productoId = req.params.productoId;

    try {
        await db.query(
            'DELETE FROM carrito WHERE usuario_id = ? AND producto_id = ?',
            [usuarioId, productoId]
        );
        res.json({ msg: 'Producto eliminado del carrito' });
    } catch (err) {
        res.status(500).json({ msg: 'Error al eliminar producto del carrito' });
    }
};
