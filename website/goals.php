
	
<?php 
include "connect_db.php";
$query0 = "SELECT account_balance FROM transactions WHERE time_added = (SELECT MAX(time_added) FROM transactions)";
$query1 = "SELECT * FROM goals";
$result0 = $conn->query($query0);
$result1 = $conn->query($query1);

if ($result0->num_rows > 0) {
	if($row = $result0->fetch_array()) {
		$current_balance = $row["account_balance"];
	}
}
if ($result1->num_rows > 0) {
	$count = 1;

	// output data of each row
	while($row = $result1->fetch_array()) {
	$percentage = $current_balance/ $row["amount"];
?>


        Goal <?php echo $count .": ". $row["description"]; ?>
		<?php echo "($" . $row["amount"] ." by ". $row["end_date"] . ")";?>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
            <?php echo round($percentage, 2) ?>%
          </div>
        </div>
<?php
	}
}
else{
	echo "0 results";
}

?>

