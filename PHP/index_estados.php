<!DOCTYPE html>
<html>
<head>
    <title>ESTADOS</title>
</head>
<body>

<h2>Lista de Estados</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ESTADO</th>
        <th>Acciones</th>
    </tr>
    <?php
    include '../conexion/db.php';

    $sql = "SELECT * FROM estado";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Estado'] . "</td>";
            echo "<td><a href='editar_php/editar_estados.php?id=" . $row['ID'] . "'>Editar</a> | <a href='eliminar_php/eliminar_estado.php?id=" . $row['ID'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "No hay roles registrados.";
    }
    ?>
</table>

</body>
</html>
