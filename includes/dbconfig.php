<?php
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set("Asia/Kolkata");

ini_set('log_errors','1'); 

//###########DB Connectivity #########Ver 2.1.0##########
	$hostname = 'localhost';
	$database = 'youtube';
	$db_login = 'root';
    $db_pass = '';

	$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,];

try {	
	$dbc = new PDO('mysql:host='.$hostname.';port=3306'.';dbname='.$database.';charset=utf8mb4', $db_login, $db_pass, $opt);
	
}catch(PDOException $e) {
    die("Could not connect to the database $database :" . $e->getMessage());
}
?>