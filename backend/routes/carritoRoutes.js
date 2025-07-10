const express = require('express');
const router = express.Router();
const authMiddleware = require('../middlewares/authMiddleware');
const {obtenerCarrito, agregarProducto, vaciarCarrito, eliminarProducto} = require('../controllers/carritoController');

router.get('/', authMiddleware, obtenerCarrito);
router.post('/', authMiddleware, agregarProducto);
router.delete('/', authMiddleware, vaciarCarrito);
router.delete('/:productoId', authMiddleware, eliminarProducto);

module.exports = router;
