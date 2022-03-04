<?php 
require "connect.php";
// Check connection

$Id = $_GET['id'];


$sql = "DELETE FROM comentarios WHERE id_c=$Id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<script> alert("Mensaje borrado");
location.href ="/WEB-LENS/muestra.php";
//location.href ="/contacto.html";
</script>

?>