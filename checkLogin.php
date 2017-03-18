<?php
	include 'header.php';

	if(isset($_POST)){
		$username = $_POST["username"];
		$password = $_POST["pwd"];
		
		$logincheck_sql = "SELECT username,email FROM user WHERE username = '".$username."' and password = '".$password."'";

		$result = $conn->query($logincheck_sql);

		if ($result->num_rows > 0) {
			//$_COOKIE["username_bake"] = $username;
			setcookie("username_bake",$username);
			setcookie("logged_in",true);
		    header('Location: home.php');
		} 
		else {
			header('Location: signin1.php');
		}
		$conn->close();
	}
?>