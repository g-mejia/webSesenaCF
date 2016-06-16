<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 26/5/16
 * Time: 1:22
 */

$logins = array(
    'admin@admin.es' => 'admin'
);

function checkLogin($username, $password, $logins){
    if (!isset($username) || !isset($password)){
        return false;
    }
    return (array_key_exists($username, $logins)
        && (strcmp($logins[$username], $password) == 0));
}

if (!checkLogin($_REQUEST['mail'], $_REQUEST['pass'], $logins)){
    session_destroy();
    $errorLogin = 'El correo electrónico o la contraseña son incorrectos';
    header("Location: ../login.php?errorLogin=$errorLogin");
}else {
    session_start();
    $_SESSION['username'] = $_REQUEST['mail'];
    header("Location: ../listado_usuarios.php");
}
?>