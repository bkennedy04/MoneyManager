<?php include "header.php";?>
<html>
<div class="col-xl-12" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Enter Transaction</div>
      <div class="panel-body">

		<form action="transaction_form_processing.php" method="post">
			Transaction Amount:<br><input type="number" step="0.01" name="amount" required><br>
			Description:<br><input type="text" name="description"><br>
			Category:<br>  <input list="browsers" name="category" required>
			  <datalist id="browsers">
				<option value="Housing">
				<option value="Utilities">
				<option value="Health Care">
				<option value="Food and Groceries">
				<option value="Personal Care">
				<option value="Entertainment">
				<option value="Emergency Fund">
				<option value="Savings">
			  </datalist> <br>
			Transaction Date:<br><input type="date" name="date" required><br>
			Account Balance:<br><input type="number" step="0.01" name="balance"><br>
			<br><input type="submit" value="Submit">
			<input type="reset">
		</form>
      </div>
    </div>
</html>	