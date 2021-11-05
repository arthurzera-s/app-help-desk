<?php 
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 's'){
    header("Location: index.php?login=erro2");
  }

?>