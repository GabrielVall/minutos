<?php
sleep(2);
session_start();
include_once("../../bd/SQLConexion.php");
$sql = new SQLConexion();

$rpta = $sql->obtenerResultadoSimple("CALL sp_insertar_informacion_final('".$_POST['TAs']."','".$_POST['TADs']."','".$_POST['FCs']."','".$_POST['sats']."','".$_POST['peso']."','".$_POST['id']."')");
if($rpta){
    $response_array['status'] = 'success';
    $response_array['msg'] = 'Cargando resultados';
}else{
    $response_array['status'] = 'error';
    $response_array['msg'] = "CALL sp_insertar_informacion_final('".$_POST['TAs']."','".$_POST['TADs']."','".$_POST['FCs']."','".$_POST['sats']."','".$_POST['peso']."','".$_POST['id']."')";
}

header('Content-type: application/json');
echo json_encode($response_array);