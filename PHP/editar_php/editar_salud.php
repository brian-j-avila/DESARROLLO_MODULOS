<!DOCTYPE html>
<html>
<head>
    <title>Editar Salud</title>
</head>
<body>

<h2>Editar Salud</h2>

<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM salud WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $valor = $row['valor'];
?>
<form action="editar_salud.php" method="post">
    Tipo de Usuario:<br>
    <input type="number" name="valor" value="<?php echo $valor; ?>" ><br>
    <input type="hidden" name="ID" value="<?php echo $id; ?>">
    
    <input type="submit" name="update" value="Actualizar salud">
</form>
<?php

    } else {
        echo "No se encontró la salud  con el ID proporcionado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $valor = $_POST['valor'];
    $ID = $_POST['ID'];

    $sql = "UPDATE salud SET valor='$valor' WHERE ID=$ID";

    if ($conn->query($sql) === TRUE) {
        echo "salud  actualizado correctamente.";
    } else {
        echo "Error al actualizar la salud: " . $conn->error;
    }
}
?>

</body>
</html>
