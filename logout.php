<?php
include 'header.php';
include 'bootstrap.php';

error_reporting(E_ALL & ~E_NOTICE);
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
<title>Logout Page</title>
</head>
<body>

<div class="col-sm-6 col-sm-offset-3">	
	<div class="loggedout">	
		<button type='button' class='btn btn-block btntest' disabled>Successfully logged out!</button>
	</div>
</div>
</body>
</html>