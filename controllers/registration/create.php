<?php

if($_SESSION['user'] ?? false){
	header('location: /');
	exit();
}

view('registration/create.view.php');