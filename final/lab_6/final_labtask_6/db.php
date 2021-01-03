<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webtechone";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function UserInfoTable($conn,$id,$name,$pass,$email,$dob)
 
 {
	 $qry = "INSERT INTO userinfo (id, username,pass,email,dob) 
      VALUES('$id','$name','$email','$pass', '$dob')";
	  
	  return $qry;
 }
 function deleteInfo($conn,$id)
 
 {
	 $sql = $conn->query("DELETE FROM userinfo WHERE id= '".$id."'");
	 return $sql;

 }

 function CloseCon($conn)
 {
 $conn -> close();
 }
  function updateInfo($conn,$id, $name, $email, $dob)
 {
	 
	$sql = $conn->query( "UPDATE userinfo set username='". $name."',email ='".$email."',dob='". $dob."' WHERE id='". $id ."'");
	
	 return $sql;
	 
 }
 

 }
?>