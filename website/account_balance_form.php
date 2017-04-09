<?php 
session_start();
include "header.php";
?>
<html>
<div class="col-xl-12" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Update Account Balance</div>
      <div class="panel-body">

		<form action="account_balance_form_processing.php" method="post">
			Current Account Balance:<br><input type="number" step="0.01" name="balance" required><br>
			<br><input type="submit" value="Submit">
			<input type="reset">
		</form>
      </div>
    </div>
</html>	