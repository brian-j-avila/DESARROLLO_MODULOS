<!DOCTYPE html>
<html>
<head>
    <title>ROLES</title>
</head>
<body>

<h2>Lista de Roles</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tipo de Usuario</th>
        <th>Acciones</th>
    </tr>
    <?php
    include '../conexion/db.php';

    $sql = "SELECT * FROM roles";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['TP_user'] . "</td>";
            echo "<td><a href='editar_php/editar_roles.php?id=" . $row['ID'] . "'>Editar</a> | <a href='delete.php?id=" . $row['ID'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "No hay roles registrados.";
    }
    ?>
</table>

</body>
</html>
