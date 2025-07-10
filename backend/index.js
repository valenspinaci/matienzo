const express = require('express');
const cors = require('cors');
const dotenv = require('dotenv');
const authRoutes = require('./routes/authRoutes');
const usuarioRoutes = require('./routes/usuarioRoutes')
const productoRoutes = require('./routes/productoRoutes')
const opinionRoutes = require('./routes/opinionRoutes')
const carritoRoutes = require('./routes/carritoRoutes')

dotenv.config();

const app = express();
app.use(cors({
    origin: 'http://localhost:5173', // URL de tu frontend
    methods: ['GET', 'POST', 'PUT', 'DELETE'],
    allowedHeaders: ['Content-Type', 'Authorization'],
}));
app.use(express.json());

app.use('/api/auth', authRoutes);
app.use('/api/users', usuarioRoutes);
app.use('/api/productos', productoRoutes);
app.use('/api/opiniones', opinionRoutes)
app.use('/api/carrito', carritoRoutes)

const PORT = process.env.PORT || 3001;
app.listen(PORT, () => console.log(`Servidor corriendo en puerto ${PORT}`));
