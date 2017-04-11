<?php
session_start();
include "header.php";
?>
<html>
<div class="col-xl-12" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Enter Transaction</div>
      <div class="panel-body">

		<form action="transaction_form_processing.php" method="post">
			Transaction Amount:<br><input type="number" step="0.01" name="amount" required><br><br>
			Description:<br><input type="text" name="description"><br><br>
			Category:<br>  <select name="category" required>
				<option value="Housing">Housing</option>
				<option value="Utilities">Utilities</option>
				<option value="Health Care">Health Care</option>
				<option value="Food and Groceries">Food and Groceries</option>
				<option value="Personal Care">Personal Care</option>
				<option value="Entertainment">Entertainment</option>
				<option value="Emergency Fund">Emergency Fund</option>
				<option value="Savings">Savings</option>
				<option value="Income">Income</option>
				<option value="Other">Other</option>
				</select>
				<br><br>
			Transaction Date:<br><input type="date" name="date" required><br><br>
			<br><input type="submit" value="Submit">
			<input type="reset">
		</form>
      </div>
    </div>
</html>	