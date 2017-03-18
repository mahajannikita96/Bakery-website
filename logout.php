<?php

if(isset($_COOKIE)){
	setcookie("logged_in",false);
	header('Location: signin1.php');
}
else{
	header('Location: signin1.php');
}

?>