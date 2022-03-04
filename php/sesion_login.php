<?php

ob_start();
session_start();

$msg = '';
            
if (isset($_POST['login']) && !empty($_POST['username']) 
   && !empty($_POST['password'])) {
    
   if ($_POST['username'] == '1234' && 
      $_POST['password'] == '1234') {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = 'tutorialspoint';
      $_SESSION['password'] = '1234';
      
      header('Location:/Web-LeNS/muestra.php');
   }else {
        header('Location: /WEB-LENS/login_admin.php');
   }
}
?>