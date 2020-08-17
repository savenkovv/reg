<?php
session_start();
require "functions.php";

$email = $_POST['email'];
$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
$sql = "SELECT * FROM reg WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
  $message = "Этот эл. адрес уже занят другим пользователем.";
  $_SESSION['danger'] = $message;  
  redirect_to('page_register.php');
  exit;
}
add_user($email, $password);
$message = "Запись добавлена";
$_SESSION['success'] = $message;  
redirect_to('page_login.php');


?>