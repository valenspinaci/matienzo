const db = require('../models/db');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');

exports.register = async (req, res) => {
    const { nombre, apellido, email, password, rol } = req.body;

    try {
        const hashedPassword = await bcrypt.hash(password, 10);

        await db.execute(
            'INSERT INTO usuarios (nombre, apellido, email, password, rol) VALUES (?, ?, ?, ?, ?)',
            [nombre, apellido, email, hashedPassword, rol || 'cliente']
        );

        res.status(201).json({ message: 'Usuario registrado correctamente' });
    } catch (error) {
        console.error('Error al registrar usuario:', error);
        res.status(500).json({ message: 'Error al registrar usuario' });
    }
};

exports.login = async (req, res) => {
    const { email, password } = req.body;

    try {
        const [result] = await db.execute('SELECT * FROM usuarios WHERE email = ?', [email]);

        if (result.length === 0) {
            return res.status(400).json({ message: 'Credenciales inválidas' });
        }

        const usuario = result[0];
        const esValido = await bcrypt.compare(password, usuario.password);

        if (!esValido) {
            return res.status(401).json({ message: 'Credenciales incorrectas' });
        }

        const token = jwt.sign(
            { id: usuario.id, email: usuario.email, rol: usuario.rol },
            process.env.JWT_SECRET,
            { expiresIn: '1d' }
        );

        res.status(200).json({ token, usuario: { id: usuario.id, nombre: usuario.nombre, email: usuario.email, rol: usuario.rol } });
    } catch (error) {
        console.error('Error al loguear:', error);
        res.status(500).json({ message: 'Error al iniciar sesión' });
    }
};