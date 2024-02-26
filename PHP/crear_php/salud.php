<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción de Valor de Salud</title>
</head>
<body>

<h2>SALUD</h2>

<form action="salud.php" method="post">
    Tipo de Usuario:<br>
    <input type="number" name="valor"><br>
    
    
    <input type="submit" value="Insertar Salud">
</form>

<?php

include '../conexion/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $valor = $_POST['valor'];
   

    
     $sql = "INSERT INTO salud (valor) VALUES ($valor)";

    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo valor de salud cargado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
