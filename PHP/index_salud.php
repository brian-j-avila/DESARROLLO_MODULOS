<!DOCTYPE html>
<html>
<head>
    <title>SALUD</title>
</head>
<body>

<h2>Lista de Valor de Salud</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Valor</th>
        <th>Acciones</th>
    </tr>
    <?php
    include '../conexion/db.php';

    $sql = "SELECT * FROM salud";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['valor'] ." "."%". "</td>";
            echo "<td><a href='editar_php/editar_salud.php?id=" . $row['ID'] . "'>Editar</a> | <a href='delete.php?id=" . $row['ID'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "No hay roles registrados.";
    }
    ?>
</table>

</body>
</html>
