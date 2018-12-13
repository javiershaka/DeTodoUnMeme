<?php

require_once('modelo/Usuario.php');


session_start();
$usuario = $_SESSION['usuario'];

if(isset($_GET['cerrar_session']) and $_GET['cerrar_session']==true){
  session_destroy();
  header('location:pages/login.php');
}

/*
function permiso($login,$tipo='usuario'){
  if($tipo=='usuario'){
    header('location:pages/login.php');
  }elseif($tipo=='admin'){
    header('location:pages/login.php');
  }
}
*/
