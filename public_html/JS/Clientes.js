// Hacer una solicitud GET al servidor para obtener los clientes filtrados por nombre
function filtrarClientesPorNombre() {
    const searchText = searchInput.value.trim();
    fetch(`http://localhost:3002/clientes?nombre=${searchText}`)
        .then(response => response.json())
        .then(data => {
            // Aquí puedes manejar los datos de los clientes recibidos y actualizar la tabla HTML
            console.log(data);
        })
        .catch(error => {
            console.error('Error al obtener los clientes:', error);
        });
}

// Agregar evento de búsqueda
searchInput.addEventListener('keyup', filtrarClientesPorNombre);
