<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh:2; URL = loginE.php');
?>