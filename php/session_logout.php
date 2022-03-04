<?php
   session_start();
   session_destroy();
   
   echo 'You have cleaned session';
   // header('Location:/login_admin.html');
   header('Location:/WEB-LENS/login_admin.php');
?>