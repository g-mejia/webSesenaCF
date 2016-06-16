<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 18/5/16
 * Time: 2:06
 */

require_once 'conectar.php';

$sql = "SELECT email, contraseña FROM usuarios";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
    $filas[] = array(
        "email" => $fila['email'],
        "contrasena" => $fila['contraseña']);
}

$json = json_encode($filas);
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>