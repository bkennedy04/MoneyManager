<?php include "header.php";?>
<html>
<div class="col-xl-12" style="padding-left: 0">
    <div class="panel panel-default">
      <div class="panel-heading">Enter Goal</div>
      <div class="panel-body">

		<form action="goals_form_processing.php" method="post">
			Amount:<br><input type="number" step="0.01" name="amount" required><br>
			Description:<br><input type="text" name="description" required><br>
			End date:<br><input type="date" name="end_date" required><br>
			<br><input type="submit" value="Submit">
			<input type="reset">
		</form>
      </div>
    </div>
</html>	