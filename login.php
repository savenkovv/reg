<?php
session_start();
require "functions.php";

	$email = $_POST['email'];
	$password = $_POST['password'];


	$user_email = get_user_email($email);
	$user_pass = get_user_pass($password);


	if (!empty($user_email) && !empty($user_pass)) {
		set_flash_message("success", "Все верно!!!");
		redirect_to('users.php');
  		exit;
	}
	else {
		set_flash_message("danger", "Неверный email или пароль");
		redirect_to('page_login.php');
		exit;

};
?>