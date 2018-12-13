<?php

include_once('conexion.php');

function usuarioPorIdControlador($id) {
    $db = new MySQL();
    $consulta = $db->consulta("SELECT*FROM usuario WHERE id=" . $id);
    $res = $db->filas($consulta);
    return($res[0]);
}

function usuariosPorTipoControlador($tipo = "normal") {
    $db = new MySQL();
    $consulta = $db->consulta("SELECT*FROM usuario WHERE tipo='$tipo'");
    $res = $db->filas($consulta);
    return($res);
}

function usuariosControlador() {
    $db = new MySQL();
    $consulta = $db->consulta("SELECT*FROM usuario");
    $res = $db->filas($consulta);
    return($res);
}


function loginControlador($correo, $contrasenia) {
    $db = new MySQL();
    $consulta = $db->consulta("SELECT*FROM usuario WHERE correo='" . $correo . "' and contrasenia='" . $contrasenia . "'");
    $res = $db->filas($consulta);
    return($res[0]);
}
function postControlador() {
    $db = new MySQL();
    $consulta = $db->consulta("SELECT*FROM post");
    $res = $db->filas($consulta);
    return($res);
}

?>