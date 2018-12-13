<?php

include('../conexion/controlador.php');
include('../modelo/Usuario.php');
session_start();

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/


function login($email, $password){

  //   if($email=="pepe@itson.edu.mx" and $password=="potro98"){
   if($datosUsuario=loginControlador($email,$password)){
      $usuario= new Usuario();
    /*  $_SESSION['usuario']['login']=true;
      $_SESSION['usuario']['email']=$datosUsuario['correo'];
      $_SESSION['usuario']['nombre']=$datosUsuario['nombre'];
      $_SESSION['usuario']['telefono']=$datosUsuario['telefono'];*/
        $usuario->id=$datosUsuario['id'];
        $usuario->nombre=$datosUsuario['nombre'];
        $usuario->apellidos=$datosUsuario['apellidos'];
        $usuario->telefono=$datosUsuario['telefono'];
        $usuario->correo=$datosUsuario['correo'];
        $usuario->tipo=$datosUsuario['tipo'];
        $_SESSION['usuario']=$usuario;
//print_r($_SESSION);
        return true;

    }else {

      return false;

    }
}

if(isset($_POST['email'])  ){
  $usuario_correcto=login($_POST['email'],$_POST['password']);

  if($usuario_correcto){
  header('location:../index.php');
  }else{
    $error=true;
  }
}

if(isset($_SESSION['usuario'])){
 header('location:../index.php');
}

 ?>