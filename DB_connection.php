<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";
$port = 3307;

try {
	$conn = new PDO("mysql:host=$sName;port=$port;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
	exit;
}
?>
