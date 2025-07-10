const express = require('express');
const router = express.Router();
const {
    getProductos,
    getProductoPorId,
    crearProducto,
    editarProducto,
    eliminarProducto,
    getDestacados
} = require('../controllers/productoController');

const authMiddleware = require('../middlewares/authMiddleware');
const soloAdmin = require('../middlewares/soloAdmin');

router.get('/', getProductos);
router.get('/destacados', getDestacados);
router.get('/:id', getProductoPorId);

router.post('/', authMiddleware, soloAdmin, crearProducto);
router.put('/:id', authMiddleware, soloAdmin, editarProducto);
router.delete('/:id', authMiddleware, soloAdmin, eliminarProducto);

module.exports = router;
