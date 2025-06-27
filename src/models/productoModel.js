export async function obtenerProductos() {
    const response = await fetch('/data/productos.json')
    const data = await response.json();
    return data;
}

export const filtrarPorCategoria = async (categoria) => {
    const response = await fetch('/data/productos.json')
    const data = await response.json()

    if (!categoria || categoria === 'todos') return data
    return data.filter(p => p.categoria.toLowerCase() === categoria.toLowerCase())
}

const promedio = (arr) =>
    arr.reduce((acc, val) => acc + val, 0) / arr.length

export const obtenerDestacados = async () => {
    const response = await fetch('/data/productos.json')
    const productos = await response.json()

    return productos
        .filter(p => p.calificaciones.length > 0)
        .sort((a, b) => {
            const promA = promedio(a.calificaciones)
            const promB = promedio(b.calificaciones)
            return promB - promA
        })
        .slice(0, 3)
}

export const agregarProducto = (productos, nuevoProducto) => {
    productos.push(nuevoProducto)
}

export const eliminarProducto = (productos, id) => {
    const index = productos.findIndex(p => p.id === id)
    if (index !== -1) productos.splice(index, 1)
}