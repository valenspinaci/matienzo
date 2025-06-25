export async function obtenerProductos (){
    const response = await fetch ('/src/data/productos.json')
    const data = await response.json();
    return data;
}