<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción de Estados</title>
</head>
<body>

<h2>Insertar Nuevo Estado</h2>

<form action="estados.php" method="post">
    Estado:<br>
    <input type="text" name="tp_estado"><br>
    
    
    <input type="submit" value="Insertar Estado">
</form>

<?php

include '../../conexion/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tp_estado = $_POST['tp_estado'];
    

    
     $sql = "INSERT INTO estado (Estado) VALUES ('$tp_estado')";

    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo rol insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
