<!DOCTYPE html>
<html>
<head>
    <title>Editar Estados</title>
</head>
<body>

<h2>Editar Estados</h2>

<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM estado WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $estado = $row['Estado'];
?>
<form action="editar_estados.php" method="post">
    Tipo de Usuario:<br>
    <input type="text" name="estado" value="<?php echo $estado; ?>"><br>
    <input type="hidden" name="ID" value="<?php echo $id; ?>">
    
    <input type="submit" name="update" value="Actualizar estado">
</form>
<?php

    } else {
        echo "No se encontró el estado con el ID proporcionado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $estado = $_POST['estado'];
    $ID= $_POST['ID'];

    $sql = "UPDATE Estado SET Estado='$estado' WHERE ID=$ID";

    if ($conn->query($sql) === TRUE) {
        echo "estado actualizado correctamente.";
    } else {
        echo "Error al actualizar el estado: " . $conn->error;
    }
}
?>

</body>
</html>
