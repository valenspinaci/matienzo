const express = require('express');
const router = express.Router();
const { getOpinionesPorProducto, crearOpinion } = require('../controllers/opinionController');
const authMiddleware = require('../middlewares/authMiddleware');

router.get('/:id', getOpinionesPorProducto);
router.post('/:id', authMiddleware, crearOpinion);

module.exports = router;
