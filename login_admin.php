
<?php 
session_start();
 
if(isset($_SESSION['username'])){
    header('Location: /WEB-LENS/muestra.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Guillermo Ortega Vargas" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Enlace a la biblioteca de bootstrap 5- archivos css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="my_css/style.css">
    <link rel="shortcut icon" href="img/favicon1.png"/>
    <title>Investigación</title>
</head>

<body class="container-fluid body1"> 
      <div class="row">
      <div class="head_log col-4 offset-4 mt-5"><img class="logonav" src="img/header.png" alt="logotivo Lens"></div>
        <div class="col-md-12 container px-5 pt-4 contenido1 cuerpo-1">
          <div class="container">
            <div class="d-flex justify-content-center h-100">
              <div class="card">
                <div class="card-header">
                  <h2 class="text-center">Administrador</h2>
                </div>
                <div class="card-body">
                  <form action = "php/sesion_login.php" method = "post">
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><img src="img/person.svg" alt="Bootstrap" width="32" height="32"></span>
                      </div>
                      <input type="text" required class="form-control" name = "username" placeholder="username">
                    </div>
                      <div class="input-group form-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text"><img src="img/key.svg" alt="Bootstrap" width="32" height="32"></span>
                    </div>
                      <input type="password" required  name = "password" class="form-control" placeholder="password">
                    </div>
                    <div class="row align-items-center remember">
                      <input type="checkbox">Recuerdame
                    </div>
                    <div class="form-group">
                      <input type="submit" name = "login" value="Login" class="btn float-right login_btn">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>      
      </div>
      <!--popper para ventas y botones emergentes, bootstrap.js-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>