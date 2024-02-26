<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción Valor de hora extra</title>
</head>
<body>

<h2>Insertar Valor de la hora extra</h2>

<form action="vhe.php" method="post">
    Valor de hora extra:<br>
    <input type="number" name="v_h_extra"><br>
  
    
    <input type="submit" value="Insertar Valor de la hora extra">
</form>

<?php

include '../conexion/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $v_h_extra = $_POST['v_h_extra'];
    

   
     $sql = "INSERT INTO v_h_extra (v_h_extra) VALUES ($v_h_extra)";

    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo rol insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
