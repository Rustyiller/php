<?php
session_start();
//require_once "connect.php";

	$host = "mysql.cba.pl";
$log = "julepp";
$haslo = "Jeffkaplan00";
$db_name = "julepp";
	/*$user = $_POST["Username"];
	$name = $_POST["Name"];
	$surname = $_POST["Surname"];
	$email = $_POST["Email"];
	$pass = $_POST["Password"];
	$confirm = $_POST["ConfirmPassword"];
	
if(isset($_POST["Email"]))
{
	$wszystko_ok=true;

	if((strlen($user)<3) || (strlen($user)>20))
		$wszystko_ok=false;
	if((strlen($pass)<8) || (strlen($pass)>20))
		$wszystko_ok=false;
	if($pass!=$confirm)
		$wszystko_ok=false;
	if($wszystko_ok==true){
		echo "Udana rejestracja";
	}
	else{
		echo "Rejestracja nie udana";
		header('Location:../index.html');
	}
}
else {
	echo "Rejestracja nie udana";
	header('Location:../index.html');
}
*/


$conn = new mysqli($host, $log, $haslo, $db_name);
var_dump($conn);
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{

	$sql = "INSERT INTO uzytkownik 
			VALUES (NULL, '$user', '$name', '$surname', '$email', '$pass')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		//header('Location:../index.html');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
$conn->close();
}
*/
?>