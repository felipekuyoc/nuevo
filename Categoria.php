<?php
// Incluir la conexión a la base de datos
include 'db_connection.php';

// Manejar la inserción de una nueva categoría
if (isset($_POST['add_category'])) {
    $nombre = $_POST['nombre'];

    if (!empty($nombre)) {
        $query = "INSERT INTO categoria (Nombre) VALUES ('$nombre')";
        mysqli_query($conn, $query);
    }
}

// Manejar la eliminación de una categoría
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM categoria WHERE ID_Categoria = $id"; // Ajustar según el nombre de la columna ID
    mysqli_query($conn, $query);
}

// Manejar la edición de una categoría
if (isset($_POST['edit_category'])) {
    $id = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];

    if (!empty($nombre)) {
        $query = "UPDATE categoria SET Nombre = '$nombre' WHERE ID_Categoria = $id"; // Ajustar según el nombre de la columna ID
        mysqli_query($conn, $query);
    }
}

// Obtener todas las categorías
$query = "SELECT * FROM categoria";
$result = mysqli_query($conn, $query);
$categorias = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Categorías</title>
</head>
<body>
    <h1>Agregar Categoría</h1>
    <form method="POST" action="">
        <input type="text" name="nombre" placeholder="Nombre de la categoría" required>
        <button type="submit" name="add_category">Agregar</button>
    </form>

    <h2>Categorías Existentes</h2>
    <table border="1">
        <tr>
            <th>ID_Categoria</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?php echo $categoria['ID_Categoria']; ?></td>
            <td><?php echo $categoria['Nombre']; ?></td>
            <td>
                <form method="POST" action="">
                    <input type="hidden" name="id_categoria" value="<?php echo $categoria['ID_Categoria']; ?>">
                    <input type="text" name="nombre" value="<?php echo $categoria['Nombre']; ?>" required>
                    <button type="submit" name="edit_category">Editar</button>
                </form>
                <a href="?delete=<?php echo $categoria['ID_Categoria']; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar esta categoría?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
