<?php

error_reporting(0);
// session_start();

$config_db = array(
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_name' => 'db_phukiendientu',
	'db_pass' => ''

);
$conn = new mysqli($config_db['db_host'], $config_db['db_user'], $config_db['db_pass'],$config_db['db_name'])  or die ('Không thể kết nối rồi bạn nhé :)) <3 <3');

// // mysqli_select_db($config_db['db_name'],$conn);

// $conn = mysqli_connect($config_db['db_host'],
// $config_db['db_user'], $config_db['db_pass'], $config_db['db_name']);
// mysqli_set_charset($conn,"utf8");
// echo("kết nối thành công");


mysqli_set_charset($conn,"utf8");
?>
