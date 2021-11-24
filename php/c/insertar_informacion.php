<?php
sleep(2);
session_start();
include_once("../../bd/SQLConexion.php");
$sql = new SQLConexion();

$rpta = $sql->obtenerResultadoID("CALL sp_insertar_informacion('".$_POST['nombre']."','".$_POST['edad']."','".$_POST['tel']."','".$_POST['estatura']."','".$_POST['peso']."','".$_POST['fc']."','".$_POST['ta']."','".$_POST['tad']."','".$_POST['sat']."',@_ID)");
if($rpta[0][0] > 0){
    $response_array['status'] = 'success';
    $response_array['msg'] = 'Información agregada';
    $response_array['id'] = $rpta[0][0];
}else{
    $response_array['status'] = 'error';
    $response_array['msg'] = 'Ha ocurrido un error, intenta más tarde...';
}

header('Content-type: application/json');
echo json_encode($response_array);