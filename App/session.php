<?php

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);


if($username == NULL || $password == NULL){

	echo "<script>alert('Você deve digitar seu nome e senha');</script>";
	echo "<script>window.location.href=../index.php'</script>";
	exit;
}else{
	require_once ''
}



  ?>