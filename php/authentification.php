<?php 
	require_once("Database/Dao.php");
	session_start();

	$dao = new Dao("localhost", "vertou_basket_bdd", "root", "");
	$login = $_POST['login'];
	$password = $_POST['password'];

	if ($dao->verifyPassword($login, $password)) {
		$_SESSION['login'] = $login;
		header("Location:".$_SERVER['HTTP_REFERER']);
		exit();
	}
	else {
		header("Location:".$_SERVER['HTTP_REFERER']."?fail=1");
		exit();
	}
?>