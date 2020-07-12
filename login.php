<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == 'mgmg@gmail.com' && $password == 123) {
    $_SESSION['auth'] = true;
    header('Location: home.php');
    die();
}

$_SESSION['auth'] = false;
header('Location: index.php');
die();





