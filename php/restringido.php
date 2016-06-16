<?php
/**
 * Created by PhpStorm.
 * User: alvaro
 * Date: 26/5/16
 * Time: 1:18
 */
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>