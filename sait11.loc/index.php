<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Главный Интерфейс</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Выберите действие</h1>
<!--Первый блок - для занесения нового пациента в список-->
<form id="newPacient" action="add_pacient.php" method="post">

<label for="name"><b>Имя:</b></label><br>
<input type="text" size="30" name="name"><br>
<label for="last_name"><b>Фамилия:</b></label><br>
<input type="text" size="30" name="last_name"><br>
<label for="adress"><b>Адрес:</b></label><br>
<input type="text" size="40" name="adress"><br>
<label for="telefon"><b>Телефон:</b></label><br>
<input type="text" size="30" name="telefon"><br>
<input type="submit" value="Внести нового пациента" name="addNew">
</form>
<!--Второй блок - для внесения записи о приеме для конкретного пациента-->
<form id="addHistory" action="addHistory.php" method="post">
<?php require 'all_pacient.php';?> <!--эта строка отвечает за вывод всех пациентов-->
<label for="date"><b>Дата приема:</b></label><br>
<input type="datetime" name="date" value="2014-03-03 12:00:00" size="20"><br>
<label for="comments"><b>Коментарии Врача:</b></label><br>
<textarea cols="25" rows="5" name="comments"></textarea><br>
<label for="next_date"><b>Дата следующего приема:</b></label><br> 
<input type="datetime" name="next_date" value="2014-03-10 12:00:00" size="20"><br>
<input type="submit" value="Добавить Новую запись для пациента" name="add_history">
</form>
<!--Третий блок - для выбора пациента и просмотра его истории-->
<form action="check_history.php" method="post">
<?php require 'all_pacient.php'; ?> <!--здесь выводим список пациентов-->
<input type="submit" value="Посмотреть Историю Пациента" name="check_history">
</form>
</body>
</html>