<?php
include ('../model/db.php');
$id = $_GET['id'];



$connection = new db();
		
$conobj=$connection->OpenCon();

//echo $id;

$sql = db::deleteInfo($conobj,$id);



	if ($sql === TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/showInfo.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>