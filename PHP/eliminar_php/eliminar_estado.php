<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        $sql = "DELETE FROM estado WHERE ID = $id";

        if ($conn->query($sql) === TRUE) {
            echo "estado eliminado correctamente.";
            header("Location: ../index_estados.php");
        } else {
            echo "Error al eliminar el estado: " . $conn->error;
        }
        exit(); 
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmar Eliminación</title>
    <script>
        function confirmDelete() {
            var confirmDelete = confirm("¿Estás seguro de que deseas eliminar este estado?");
            if (confirmDelete) {
                window.location.href = "eliminar_estado.php?id=<?php echo $id; ?>&confirm=true";
               
            } else {
                window.location.href = "../index_estados.php"; 
            }
        }
    </script>
</head>
<body>

<h2>Confirmar Eliminación</h2>

<button onclick="confirmDelete()">Eliminar estado</button>



</body>
</html>
<?php

}
?>
