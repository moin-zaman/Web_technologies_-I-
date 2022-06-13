<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration  Page</title>
</head>
<body>
		<h1>Welcome to the registration Page!</h1>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>