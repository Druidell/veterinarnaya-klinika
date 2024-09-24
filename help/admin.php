<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$connect = new PDO("mysql:host=localhost; dbname=veterinarnaya;", 'root','');
if (isset($_POST['nameowner'])) { //isset for date
$namepet = $_POST['namepet'];
$nameowner = $_POST['nameowner'];
$surnameowner = $_POST['surnameowner'];
$agepet = $_POST['agepet'];
$typepet = $_POST['typepet'];
$descriptionpet = $_POST['descriptionpet'];
$numberowner = $_POST['numberowner'];
$query = $connect->query ("INSERT INTO veterinarnaya.pet (namepet, nameowner, surnameowner, agepet, typepet, descriptionpet, numberowner)
VALUES ('$namepet', '$nameowner', '$surnameowner', '$agepet', '$typepet', '$descriptionpet', '$numberowner')");
}
// для передачи обратной связи
// Перенаправление на текущую страницу
header("Location: {$_SERVER['REQUEST_URI']}"); 
exit; 
} 
?> 
