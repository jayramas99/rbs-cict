<?php

$host = 'localhost';
$usernamee = 'root';
$password = '';
$database = 'dbs6046181';

$conn = mysqli_connect($host, $usernamee, $password, $database);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:". mysqli_connect_error();
}
?>