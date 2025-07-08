const express = require('express');
const router = express.Router();
const authMiddleware = require('../middlewares/authMiddleware');
const soloAdmin = require('../middlewares/soloAdmin');
const {getUsuarioPorId, actualizarPerfil} = require('../controllers/usuarioController')

router.get('/perfil', authMiddleware, getUsuarioPorId);

router.put('/perfil', authMiddleware, actualizarPerfil);

router.get('/admin/usuarios', authMiddleware, soloAdmin, (req, res) => {
    res.json({ message: 'Listado de usuarios solo para admins' });
});

module.exports = router;
