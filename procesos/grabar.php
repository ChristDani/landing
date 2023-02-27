<?php
    require_once("../model/conexionbd.php");
    require_once("../model/model_registro.php");
   
    $mensaje=null;
    $dni=$_POST["txtdni"];
    $nombre=$_POST["txtnombre"];
    $apellido=$_POST["txtapellido"];
    $telefono=$_POST["txttelefono"];
    $email=$_POST["txtemail"];
    $asunto=$_POST["lstasunto"];
    // $mensaje2=$_POST["txtmensaje"];
    $consulta=new Registro_datos();
    $mensaje=$consulta->registrando_datos($dni,$nombre,$apellido,$email,$telefono,$asunto);
    echo $mensaje;
    header("location:../view/landing_page.php?mens=$mensaje");




?>