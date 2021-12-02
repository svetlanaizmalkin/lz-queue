<?php
require_once '../database/dbconnect.php';

if (empty($_POST['name']) || empty($_POST['surname'])) die();

if($_POST){

  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $datetime = date_create('now')->format('Y-m-d H:i:s');
  $sql = "SET NAMES utf8mb4";
  $conn->query($sql);
  $sql = "INSERT INTO $usertable ($nameCol, $surnameCol, $datetimeCol) VALUES ('$name', '$surname', '$datetime')";
  $conn->query($sql);
  $conn->close();
}