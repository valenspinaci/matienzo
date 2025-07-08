const soloAdmin = (req, res, next) => {
    if (req.usuario.rol !== 'admin') {
        return res.status(403).json({ message: 'Solo los administradores pueden acceder' });
    }
    next();
};

module.exports = soloAdmin;