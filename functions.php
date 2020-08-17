<?php 

function get_user_by_email($email)
{

};


function add_user($email, $password)
{
$email = $_POST['email'];
$password = $_POST['password'];
$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
$sql = "INSERT INTO reg (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);
};


function set_flash_message($name, $message)
{
	//$message = "Этот эл. адрес уже занят другим пользователем.";
};


function display_flash_message($name)
{
	  //$_SESSION[$name] = $message; 
};


function redirect_to($path)
{
	header("Location:".$path);
};


?>