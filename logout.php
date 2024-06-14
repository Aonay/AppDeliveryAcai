<?php
 if(isset($_GET['nome'])){
  session_start();
  session_unset();
  session_destroy();
  header('Location: principal.php');

 }
?>