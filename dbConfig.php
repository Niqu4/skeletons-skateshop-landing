<?php
$mysqli = new mysqli("localhost", "root", "", "skeletons_subs");

	if(mysqli_connect_errno()){
		echo "не удалось соединиться с базой";
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		printf("Не удалось соединиться с базой %s\'n", mysqlie_connect_error());
		exit();
	}
?>