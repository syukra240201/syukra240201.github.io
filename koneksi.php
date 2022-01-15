<?php
	$host = "localhost";
	$user = "root";
	$pass = "";

	$db = "dbvaccum";
	$conn = mysqli_connect($host,$user,$pass,$db);
	mysqli_select_db ($conn, $db);

	if (!$conn) {
   		die('Maaf koneksi gagal: '. $connect->connect_error);
	}
	else{
		//echo 'logo';
		//echo $_SESSION['viewnya'];
	}
?>
