<?php
	include 'header.php';

	if(isset($_POST)){
		$email = $_POST["email"];
		$cardnumber = $_POST["cardnumber"];
		$expiresmonth = $_POST["expiresmonth"];
		$expiresyear = $_POST["expiresyear"];
		$sec_code = $_POST["Securitycode"];
		
		$insert_sql = "INSERT INTO payment_info (email,ccnumber, expiry_month,expiry_year,Securitycode) VALUES ('".$email."', '".$cardnumber."', '".$expiresmonth."', '".$expiresyear."', '".$sec_code."')";

		if ($conn->query($insert_sql) === TRUE) {
			$_POST["success_message"] = "You have registered successfully";
			

			$deletecart_sql = "DELETE FROM product WHERE username = '".$_COOKIE["username_bake"]."'";

			$result = $conn->query($deletecart_sql);


			header('Location: product.php');
			//echo "You have registered successfully";
		} 
		else {
			echo "Error: " . $insert_sql . "<br>" . $conn->error;
		}
	}
?>