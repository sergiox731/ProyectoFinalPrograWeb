<?php


function regresarConexion(){
  $server = "localhost";
  $usuario = "id19815085_admin";
  $clave = "c-_I518IWB2(xb7H";
  $base = "id19815085_base_sesion";

  $conexion = mysqli_connect($server, $usuario, $clave, $base) or die ("Problemas con la Conexion");
  mysqli_set_charset($conexion, 'utf8');
  return $conexion;
}


?>
