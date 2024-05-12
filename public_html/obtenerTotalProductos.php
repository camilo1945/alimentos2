<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datos";

// Establecer conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener el total de productos en el inventario
$sql = "SELECT COUNT(*) AS total FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener el resultado de la consulta
    $row = $result->fetch_assoc();
    
    // Extraer el total de productos del resultado
    $totalProductos = $row["total"];
    
    // Devolver el total de productos como respuesta
    echo $totalProductos;
} else {
    echo "0"; // Si no hay resultados, mostrar 0 como total de productos
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
