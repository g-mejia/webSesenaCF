<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 18/5/16
 * Time: 2:02
 */

/*$dbhost = "mysql7.000webhost.com";
$dbuser = "a1226612_TEWC";
$dbpass = "TEWC12";
$dbname = "a1226612_TEWC";*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "usuarios";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error) {
    die("Error conexión BBDD " . $error->getMessage());
}
?>