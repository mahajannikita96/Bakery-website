<?php
	include 'header.php';

	if(isset($_POST)){
		$email = $_POST["email"];
		$realname = $_POST["realname"];
		$mobilenumber = $_POST["mobilenumber"];
		$a1 = $_POST["address1"];
		$a2 = $_POST["address2"];
	
		$insert_sql = "INSERT INTO address_info (email,fullname, mobilenumber,address1,address2) VALUES ('".$email."', '".$realname."', '".$mobilenumber."', '".$a1."', '".$a2."')";

		if ($conn->query($insert_sql) === TRUE) {
			$_POST["success_message"] = "You have registered successfully";
			header('Location: cart.php');
			//echo "You have registered successfully";
		} 
		else {
			echo "Error: " . $insert_sql . "<br>" . $conn->error;
		}
	}
?>