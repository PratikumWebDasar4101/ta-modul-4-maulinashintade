<?php 
session_start();

$user = array(
		"nama" => "Nama Anda",
		"username" => "admin",
		"password" => 1234,
		"notelp" => "081320001833"
);

if ($user["username"] == $_POST["username"]) && $user["password"] == $_POST["password"] {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: form.php");
}else{
	header("Location: loginbelanja.html")
}

 ?>