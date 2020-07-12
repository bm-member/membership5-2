<?php 
session_start();
if (! $_SESSION['auth']) {
    header('Location: index.php');
    die();
};
?>

<h1>Home Page.</h1>
<a href="logout.php">Logout</a>

