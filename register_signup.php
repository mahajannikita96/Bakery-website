<?php
	include 'header.php';

	if(isset($_POST)){
		$email = $_POST["email"];
		$username = $_POST["username"];
		$password = $_POST["pwd"];
		
		$usernamecheck_sql = "SELECT username,email FROM user WHERE email = '".$email."'";

		$result = $conn->query($usernamecheck_sql);

		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
        		$_POST["error_username"] = $row["username"];
        		$_POST["error_email"] = $row["email"];
    		}
		    header('Location: register.php');
		} 
		else {
			
			$insert_sql = "INSERT INTO user (email, username, password) VALUES ('".$email."', '".$username."', '".$password."')";

			if ($conn->query($insert_sql) === TRUE) {
    			$_POST["success_message"] = "You have registered successfully";
    			header('Location: home.php');
    			//echo "You have registered successfully";
			} 
			else {
    			echo "Error: " . $insert_sql . "<br>" . $conn->error;
			}

		}
		

		$conn->close();
	}
























?>