<?php
require "connect.php";
// Check connection

$matri = $_POST['matricula'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

echo $matri . " ".$asunto;
$sql = "INSERT INTO comentarios (Matricula, Email, Asunto) VALUES ('$matri','$email','$asunto')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script> alert("Mensaje Registrado");
location.href ="/WEB-LENS/contacto.html";
//location.href ="/contacto.html";
</script>