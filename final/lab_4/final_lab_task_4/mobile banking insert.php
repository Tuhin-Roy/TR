<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<?php

      $conn= new mysqli("localhost","Tuhin","1734169","wt");
	  if($conn-> connect_error)
	  {
		  die("connection failed");
	  }
	  else
	  {
		  echo "connected";
		  echo "</br>";
		  $Sql="insert into USERS(Id,Name,Balance) values(1,'Tuhin','5000')";
		  
		  if($conn -> query($Sql))
		  {
			  echo "table created";
	      }
		  else
		  {
			  echo "table created unsuccessfull";
			  echo "<br>";
			  echo $conn->error;
		  }
	  }
      $conn->close();
?>
</body>
</html>