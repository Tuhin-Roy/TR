<?php
	
		$name =  $email = $id = $pass = $cpass = $dob = "";
		 $emailPut="";
		 $phonePut="";
		  $nameError ="";
		  $userIdError ="";
		  $emailErr ="";
		  $passError ="";
		  $cPassError ="";
		  $validPass ="";
		  $genderError ="";
		  $noError ="";
		  $userError ="";
		  $numberrError ="";
		  $nameValid="";
		  $count ="";
		  $dobError="";
		  
		  
		if (isset($_POST['submit']))
		{
		  
		  $name = $_POST["name"];
		  $userId = $_POST["id"];
		  $email = $_POST["email"];
		  $pass = $_POST["password"];
		  $cPass = $_POST["cpassword"];
		  $dob = $_POST["dob"];
		 
		  $len = strlen($name);
		  if($name == NULL || $len<3)
		   {
			$nameValid = "empty name field or short length of name";
		   }
		   

		   elseif($len >= 3 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
		   {
				for($i = 1; $i<$len; $i++)
			   {
					 if($name>='A'&& $name<='Z' || $name>='a'&& $name<='z' || $name=='.' || $name=='-' )
					 {
						  $nameValid;
					 }

					 else {
						 $nameValid = "name is invalid";
					 }
			   }

		   }
		     else {
                   $nameValid ="invalid name";
                  }
		
		   $pos =strpos($email, '@');
		   $pos2 = strpos($email,'gmail');
		   $pos1 = strpos($email, ".com");

		   if($email == NULL)
		   {
			$emailErr =  "empty email field!";
		   }

		   elseif ($pos!=False && $pos1!=False && $pos1 > $pos && $pos1 > $pos2 && $pos2>$pos) {
				  
					 $email;
		   }
		   else {
			   $emailErr = "Invalid Email!";
		   }
		
		if (empty($userId))
		{
			$userIdError = "fill up the field";
		}
		
		if (empty($pass))
		{
			$passError = "Set the Password";
		}
		elseif(strlen($pass)<6){
            $passError="Password must be 6 characters long.";
        }
        elseif(strcmp(strtoupper($pass),$pass)==0 && strcmp(strtolower($pass),$pass)==0){
            $passError="Password must contain 1 Upper and Lowercase letter.";
        }
		
		if (empty($cPass))
		{
			$cPassError = "Set the Confirm Password";
		}
		
		elseif($pass != $cPass)
		{
			$cPassError = "password doesnot match";
		}
		
		
		
		if (empty($dob))
		{
			$dobError = "Date of Birth Error";
		}
		
		}	
		?>