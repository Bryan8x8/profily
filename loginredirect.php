<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $username = $_SESSION['username'];
    header('Location: user.php');
}

?>