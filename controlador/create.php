<?php

$target_path = "../planos/";
$target_path = $target_path . basename($_FILES['plano']['name']);

$nombreArchivo = "";

if (move_uploaded_file($_FILES['plano']['tmp_name'], $target_path)) {
    echo "El archivo " . basename($_FILES['plano']['name']) . " ha sido subido exitosamente!";
    $nombreArchivo = basename($_FILES['plano']['name']);
} else {
    echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo.";
}
include '../clases/Conexion.php';
include '../clases/Pedido.php';

$objConexion = new Conexion();
$objPedido = new Pedido();
$conexion = $objConexion->conectar();

$objPedido = new Pedido();


$fp = fopen("../planos/$nombreArchivo", "r");

$tamIdentUsu = $_POST['identifi_usuario'];
$tamZonaUsu = $_POST['identifi_zona'];
$tamNombre = $_POST['Nombre_usuario'];
$tamEmail = $_POST['Email_usuario'];
$tamFecha = $_POST['Fechadeingreso'];
$tamHora = $_POST['Horadeingreso'];

while (!feof($fp)) {
    $linea = fgets($fp);
    $identifi_usuario = substr($linea, 0, $tamIdentUsu);
    $identifi_zona = substr($linea, $tamIdentUsu, $tamZonaUsu);
    $Nombre_usuario = substr($linea, $tamIdentUsu + $tamZonaUsu, $tamNombre);
    $Email_usuario = substr($linea, $tamIdentUsu + $tamZonaUsu + $tamNombre, $tamEmail);
    $Fechadeingreso = substr($linea, $tamIdentUsu + $tamZonaUsu + $tamNombre + $tamEmail, $tamFecha);
    $Horadeingreso = substr($linea, $tamIdentUsu + $tamZonaUsu + $tamNombre + $tamEmail + $tamFecha, $tamHora);
    
    $objPedido->GuardarPedido($conexion, $identifi_usuario, $identifi_zona, $Nombre_usuario, $Email_usuario, $Fechadeingreso, $Horadeingreso);
}

fclose($fp);