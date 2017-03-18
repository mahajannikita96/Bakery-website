<?php
	include 'header.php';

	if(isset($_POST)){
		$productname = $_POST["cookiename"];
		$productprice = $_POST["cookieprice"];
		$quantity = $_POST["quantity"];
		$username = $_COOKIE["username_bake"];
		$totalprice = $quantity*$productprice;

		$insertproduct_sql = "INSERT INTO product (username, productname, productprice, quantity) VALUES ('".$username."', '".$productname."', '".$totalprice."', '".$quantity."')";

		if ($conn->query($insertproduct_sql) === TRUE) {
			$_POST["success_message"] = "Added to Cart";
			header('Location: Productlist5.php');
			//echo "You have registered successfully";
		} 
		else {
			echo "Error: " . $insert_sql . "<br>" . $conn->error;
		}
		unset($_POST);
		$conn->close();
	}

?>