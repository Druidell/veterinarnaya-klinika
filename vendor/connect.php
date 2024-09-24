<?php
session_start();

if ($_SESSION['user']) {
}
else{
	header('Location: ../autorize.php');
}

?>
<?php

    $connect = mysqli_connect('localhost', 'root', '', 'veterinarnaya');

    if (!$connect) {
        die('Error connect to DataBase');
    }