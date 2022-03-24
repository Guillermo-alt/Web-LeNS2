<?php

//$host='localhost';

$host='localhost';
$user='root';
$pass='';
$dataBase='u689962032_LensLab';

/* colocar esto en un .env
$host='lenslab-uamc.net';
$user='u689962032_Guillermo';
$pass='Kinomoto76';
$dataBase='u689962032_LensLab';*/

// Create connection
$conn = new mysqli($host, $user, $pass,$dataBase, 3306);

// Check connection
if ($conn->connect_errno) {
    echo 'Fallo al conectar a MySQL: (" . $conn->connect_errno . ") ' . $conn->connect_error;
}
//echo $conn->host_info . "\n";

 ?>
