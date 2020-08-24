<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';
require_once './bin/http/ControladorUsuarios.php';
require_once './bin/http/Respuesta.php';
require_once './bin/constantes/EMensajes.php';
require_once './bin/persistencia/modelos/ModeloGenerico.php';
require_once './bin/persistencia/modelos/Usuarios.php';

$controladorUsuarios = new ControladorUsuarios();

// ==========Crud de Datos==============

// $respuesta= $controladorUsuarios->actualizarUsuario($usuario);
// $respuesta= $controladorUsuarios->eliminarUsuario(12);
// $respuesta= $controladorUsuarios->buscarUsuarioPorId(1);
// $respuesta= $controladorUsuarios ->insertarUsuario([
//     "name" => "Prueba New con Controller",
//     "phone" => 4444,
//     "adress" => "1551111A3",
//     "email" => "111BBB111"
// ]);

// $usuario=[
//     "idUsuario" => 13,
//     "email"=> "correoprueba@gmail.com",
//     "phone"=> 999451
// ];

// echo "<br/>";
// var_dump($respuesta);
// echo "<br/>";

$respuesta = $controladorUsuarios->listarUsuarios()->json();
echo ($respuesta);

$hola= 'prueba';

?>
