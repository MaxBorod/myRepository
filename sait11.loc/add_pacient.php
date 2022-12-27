<?php
require 'connect.php';
$name = $_REQUEST['name'];
$last_name = $_REQUEST['last_name'];
$adress = $_REQUEST['adress'];
$telefon = $_REQUEST['telefon'];
$link=mysqli_connect("localhost","root","","ychet")
or die ("<p>Ошибка подключения к базе данных " .mysqli_error()."</p>");
$mysqli_insert = "INSERT INTO my_pacient(name,last_name,adress,telefon)".
"VALUES('{$name}','{$last_name}','{$adress}','{$telefon}');";
mysqli_query($link,$mysqli_insert) or die ("<p>Ошибка вставки ".mysqli_error($link));
echo 'Пациент добавлен в список!';
?>
<a href="index.php">Вернуться в меню</a>