<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción de Roles</title>
</head>
<body>

<h2>Insertar Nuevo Rol</h2>

<form action="roles.php" method="post">
    Tipo de Usuario:<br>
    <input type="text" name="tp_usuarios"><br>
    <input type="number" name="ID_USER" ><br>
    
    <input type="submit" value="Insertar Rol">
</form>

<?php

include '../conexion/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tp_usuarios = $_POST['tp_usuarios'];
    $ID_USER = $_POST['ID_USER'];

    
     $sql = "INSERT INTO roles (ID, TP_user) VALUES ($ID_USER,'$tp_usuarios')";

    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo rol insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
