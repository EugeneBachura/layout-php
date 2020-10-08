<?php 
$user = "root";
$password = "";

try {
	$db = new PDO("mysql:host=localhost;dbname=news", $user, $password);
	echo "<script>console.log('OK~')</script>";
} catch (Exception $e) {
	echo "<p> Извините, в данный момент сервер недоступен. </p>"+$e->getMessage();
}
 ?>