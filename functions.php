<?php 

function get_user_by_email($email)
{
	$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
	$sql = "SELECT * FROM reg WHERE email=:email";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email' => $email]);
	$user = $statement->fetch(PDO::FETCH_ASSOC);
	return($user);
};


function add_user($email, $password)
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
	$sql = "INSERT INTO reg (email, password) VALUES (:email, :password)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email' => $email, 'password' => $password ]);
};


function set_flash_message($name, $message)
{
	$_SESSION[$name] = $message;
};


function display_flash_message($name)
{
	if (isset($_SESSION[$name])){
		echo "<div class=\"alert alert-{$name} text-dark\" role=\"alert\">{$_SESSION[$name]}</div>";
		unset($_SESSION[$name]);
	}
};

function redirect_to($path)
{
	header("Location:".$path);
};

//LOGIN----------------------------------------------------------------




function get_user_email($email)
{
	$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
	$sql = "SELECT * FROM reg WHERE email=:email";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email' => $email]);
	$user_email = $statement->fetch(PDO::FETCH_ASSOC);
	return($user_email);
};


function get_user_pass($password)
{
	$pdo = new PDO("mysql:host=localhost;dbname=marlin", "admin","");
	$sql = "SELECT * FROM reg WHERE password=:password";
	$statement = $pdo->prepare($sql);
	$statement->execute(['password' => $password]);
	$user_pass = $statement->fetch(PDO::FETCH_ASSOC);
	return($user_pass);
};





/*function login($email, $password)
{
	# code...
}''
*/
?>
