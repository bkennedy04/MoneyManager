<?php 
session_start();
?>
<html>
<div class="col-xl-12" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Sign up for a Money Manager account!</div>
      <div class="panel-body">

		<form action="sign_up_processing.php" method="post"><br>
			User name:<br><input type="text" name="username" required><br><br>
			Password:<br><input type="password" name="password" required><br><br>
			<br><input type="submit" value="Submit">
			<input type="reset">
		</form>
		Go back to <a href="login.html">login page</a>.<br><br>
      </div>
    </div>
</html>	