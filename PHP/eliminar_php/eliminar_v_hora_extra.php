<?php
include '../../conexion/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        $sql = "DELETE FROM v_h_extra WHERE ID = $id";

        if ($conn->query($sql) === TRUE) {
            echo "valor de hora extra eliminado correctamente.";
            header("Location: ../index_valor_extra.php");
        } else {
            echo "Error al eliminar el valor de hora extra : " . $conn->error;
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
            var confirmDelete = confirm("¿Estás seguro de que deseas eliminar este valor de hora extra ?");
            if (confirmDelete) {
                window.location.href = "eliminar_v_hora_extra.php?id=<?php echo $id; ?>&confirm=true";
               
            } else {
                window.location.href = "../index_valor_extra.php"; 
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
