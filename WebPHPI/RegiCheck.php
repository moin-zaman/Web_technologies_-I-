<?php 
	session_start();

	/*$_GET
	$_POST
	$_REQUEST
	$_SERVER 
	$GLOBALS*/ 

	print_r($_REQUEST['FirstName']);
	echo "<br>";
	print_r($_REQUEST['LastName']);
	echo "<br>";
	print_r($_REQUEST['Email']);
	echo "<br>";
	print_r($_REQUEST['DOB']);
	echo "<br>";

	$firstName = $_REQUEST['FirstName'];
	$lastName = $_REQUEST['LastName'];
	$email = $_REQUEST['Email'];
	$DOB = $_REQUEST['DOB'];

	if ($firstName == null || $lastName == null )
		{
		echo "Please fill all the input field ";
		echo "<br/> ";
		}
	
	else
	{
		if($firstName == $lastName){
			$_SESSION['status'] = true;
			header('location: homeregi.php');
		}else{
			echo "invalid user";
		}
	}
	
	



?>