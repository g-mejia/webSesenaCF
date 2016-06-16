<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 18/5/16
 * Time: 2:00
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'conectar.php';

$mail = $_POST['mail'];
$psswrd = $_POST['password'];

$validado = (!empty($mail) && !empty($psswrd));

	if (!$validado) {
        $error = "Los campos 'Usuario' $mail y 'Contraseña' $psswrd son obligatorios";
        //header("Location: ./templates/header.php?error=$error") or die("Error al redirigir a formulario con error $error");;
        echo "ERROR: Los campos Usuario y Contraseña son obligatorios";
    } else {
        $sql_insert = "INSERT INTO `usuarios` (email, contraseña) " . "
			      VALUES (?, ?)";
        try {
            $sentencia = $db->prepare($sql_insert);
            $sentencia->execute(array($mail, $psswrd));
            echo "¡Ha sido registrado con éxito!"; // success message
        }catch(PDOException $error) {
            echo "Error al registrarse. Vuelva a intentarlo";
        }
    }

//Redirige a listado de usuarios
//header("Location: ./listado_usuarios.php") or die("Error al redirigir a listado de usuarios");;

?>