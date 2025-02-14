<?php
 //Efetuar o logout da sessão
  if(!isset($_SESSION)) {
      session_start();
  }
  
  session_destroy();
  
  header("Location: index.php");
?>