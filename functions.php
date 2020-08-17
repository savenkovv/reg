<?php 

function get_user_by_email($email)
{

};


function add_user($email, $password)
{
	
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