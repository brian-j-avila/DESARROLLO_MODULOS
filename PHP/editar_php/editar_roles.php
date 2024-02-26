<!DOCTYPE html>
<html>
<head>
    <title>Editar Rol</title>
</head>
<body>

<h2>Editar Rol</h2>

<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM roles WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tp_usuarios = $row['TP_user'];
?>
<form action="editar_roles.php" method="post">
    Tipo de Usuario:<br>
    <input type="text" name="tp_usuarios" value="<?php echo $tp_usuarios; ?>"><br>
    <input type="hidden" name="ID_USER" value="<?php echo $id; ?>">
    
    <input type="submit" name="update" value="Actualizar Rol">
</form>
<?php

    } else {
        echo "No se encontró el rol con el ID proporcionado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $tp_usuarios = $_POST['tp_usuarios'];
    $ID_USER = $_POST['ID_USER'];

    $sql = "UPDATE roles SET TP_user='$tp_usuarios' WHERE ID=$ID_USER";

    if ($conn->query($sql) === TRUE) {
        echo "Rol actualizado correctamente.";
    } else {
        echo "Error al actualizar el rol: " . $conn->error;
    }
}
?>

</body>
</html>
