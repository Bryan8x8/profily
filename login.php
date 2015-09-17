<?php
	include 'header.php';
	include 'bootstrap.php';
?>


    <?php

    include 'loginredirect.php';

?>




<div class="col-sm-offset-3 col-sm-6 col-xs-10 col-xs-offset-1 logincontainer">
<form class="form-horizontal" role="form" method="post" action="login.php">
	<div class="form-group">
    	<div class="col-sm-12">
    		<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Enter username" name="username">
    	</div>
  	</div>	
  	<div class="form-group">
    	<div class="col-sm-12">
    		<input class="form-control" type="password" id="formGroupInputSmall" placeholder="Enter password" name="password" >
    	</div>
  	</div>

  	<div class="col-sm-6 col-xs-6">
		<button class="btn btn-success btn-group-justified" type ="submit" name="login" value="Log In">Login</button>
	</div>
	<div class="col-sm-6 col-xs-6">
		<a href="signup.php" class="btn btn-primary btn-group-justified">Sign Up</a>
	</div>

	<div class="col-sm-12 verificationbox">

	<?php

	include 'logintest.php';

	?>

	</div>
</form>

</div>















</body>
</html>

