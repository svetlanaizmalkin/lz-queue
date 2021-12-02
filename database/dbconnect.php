<?php
//Переменные для подключения
$servername = "localhost"; //имя хоста
$username = "root"; //логин для входа
$password = "root"; //пароль для входа
$dbname = "lz_queue"; //название базы данных
$usertable="people"; //название таблицы
$nameCol = "name"; //назване колонки для имени в таблице
$surnameCol = "surname"; //назване колонки для фамилии в таблице
$datetimeCol = "datetime"; //назване колонки для даты и времени в таблице

// Создаём соединение
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}