<?php

    require_once("conexionbd.php");
    class Registro_datos
    {
        public function registrando_datos($arg_dni,$arg_nombre,$arg_apellido,$arg_email,$arg_telefono,$asunto)
        {
            $model=new Conexion();
            $conexion=$model->get_conexion();
            $sql="INSERT INTO clientes () values('$arg_dni','$arg_nombre','$arg_apellido','$arg_email','$arg_telefono','$asunto');";
            $sentencia=$conexion->prepare($sql);

            if(!$sentencia)
            {
                return "Mensaje no enviado";
            }
            else
            {
                $sentencia->execute();
                return "Datos Grabados Satisfactoriamente...";
            }
           $conexion=$model->get_desconexion();

        }
    }

?>