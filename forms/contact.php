<?php
session_start();

require './bd/conexion_bd.php';

$obj = new BD_PDO();

if(isset($_POST['btnagregar']))
{
   if ($_POST['btnagregar']=='Agregar')
    {
  $obj->Ejecutar_Instruccion("insert into tblpacientes(nombre_pac,edad_pac,tel_pac)

      values('".$_POST['txtnombre_pac']."',
    '".$_POST['txtedad_pac']."',
    '".$_POST['txttel_pac']."' )"
      );
     }
     else
     {
         
      $obj->Ejecutar_Instruccion("update tblpacientes set 
        nombre_pac='".$_POST['txtnombre_pac']."',
        edad_pac='".$_POST['txtedad_pac']."',
        tel_pac='".$_POST['txttel_pac']."'  
        where id_pac='".@$_SESSION['idmod']."'");
     }
}

else if(isset($_GET['btneliminar']))
{
  $obj->Ejecutar_Instruccion("delete from tblpacientes where id_pac='".$_GET['btneliminar']."'");
}
else if(isset($_GET['idmodificar']))
{
  $registro_mod = $obj->Ejecutar_Instruccion("select * from tblpacientes where id_pac='".$_GET['idmodificar']."'");
  
  $_SESSION['idmod'] = $_GET['idmodificar'];
}

else if (isset($_GET['btnbuscar'])) 
{
  $mispacientes = $obj->Ejecutar_Instruccion("Select * from tblpacientes");

}


?>