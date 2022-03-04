
<?php require "php/connect.php"; 

//start a session
session_start();
 
if(!isset($_SESSION['username'])){
    header('Location: /WEB-LENS/login_admin.php');
    exit;
}
    // Show users the page!
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}

$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Guillermo Ortega Vargas" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Con esto no tendrá en cuenta el cache que ha guardado anteriormente.tas-->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

  <!--Enlace a la biblioteca de bootstrap 5- archivos css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <?php 
  echo ('<link rel="stylesheet" href="my_css/style.css">');
  ?>
  
  <link rel="shortcut icon" href="img/favicon1.png" />
  <title>Muestra comentarios</title>
</head>

<body class="container-fluid">


  <div class="row">
  <nav class="navbar navbar-expand-lg pt-4">
      <div class="container-fluid  ">
        <a class="navbar-brand" href="index.html"><img class="logonav" src="img/header.png" alt="logotivo Lens"></a><!--sobra pero se necesita para espacio en icono nav-->
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
             <li class="nav-item ">
              <a class="nav-link active" href="muestra.php">Comentarios</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="php/session_logout.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
  <div class="row">
    <div class="col-md-12 container px-5 pt-4 contenido1 cuerpo-1">
      <h2 class="text-center Titulo-1">Comentarios</h2>
      <!--tabla con php-->
      <div class="table-responsive col-12">
      <?php 
      if ($result->num_rows > 0) {
        // output data of each row
        echo ('<table class = "table">');
        echo('<thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Matrícula</th>
          <th>Comentario</th>
          <th>Acción</th>
         </tr>
        </thead');
        echo('<tbody>');
        while($row = $result->fetch_assoc()) {
          $id=$row["id_c"];
          echo " <td>" . $row["id_c"]. "</td> <td>" .$row["Matricula"]. "</td> <td>" . $row["Email"]. "</td> <td>". $row["Asunto"]. "</td> <td> <a class='btn btn-danger' href = 'php/delete.php?id=$id' >Borrar</a> </td>";
          echo ('</tr>');
        }
        echo('</tbody>');
        echo ('</table>');
      } else {
        echo "0 results";
      }
      mysqli_close($conn);
      ?>
      </div>
      <a class="btn b1 mt-4" href="php/export.php" target="_blank">Exportar</a>
    </div>
  </div>
  <!--popper para ventas y botones emergentes, bootstrap.js-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>