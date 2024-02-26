<!DOCTYPE html>
<html>
<head>
    <title>Editar Pension</title>
</head>
<body>

<h2>Editar Pension</h2>

<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM v_h_extra WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $valor = $row['V_H_extra'];
?>
<form action="editar_valor_extra.php" method="post">
    Tipo de Usuario:<br>
    <input type="number" name="valor" value="<?php echo $valor; ?>" ><br>
    <input type="hidden" name="ID" value="<?php echo $id; ?>">
    
    <input type="submit" name="update" value="Actualizar el valor de la hora extra">
</form>
<?php

    } else {
        echo "No se encontró la pension  con el ID proporcionado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $valor = $_POST['valor'];
    $ID = $_POST['ID'];

    $sql = "UPDATE v_h_extra SET V_H_extra='$valor' WHERE ID=$ID";

    if ($conn->query($sql) === TRUE) {
        echo "pension  actualizado correctamente.";
    } else {
        echo "Error al actualizar el rol: " . $conn->error;
    }
}
?>

</body>
</html>
