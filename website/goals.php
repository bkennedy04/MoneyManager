<?php 

include "connect_db.php";
$query0 = "SELECT account_balance FROM transactions WHERE time_added = (SELECT MAX(time_added) FROM transactions WHERE user_id = ".$_SESSION["id"].") AND user_id = ".$_SESSION["id"];
$query1 = "SELECT * FROM goals WHERE user_id = ".$_SESSION["id"];
$result0 = $conn->query($query0);
$result1 = $conn->query($query1);

$current_balance = 0;

if ($result0->num_rows > 0) {
	if($row = $result0->fetch_array()) {
		$current_balance = $row["account_balance"];
	}
}
if ($result1->num_rows > 0) {
	$count = 1;

	// output data of each row
	while($row = $result1->fetch_array()) {
	$percentage =($current_balance/ $row["amount"]) * 100;
?>


        Goal <?php echo $count .": ". $row["description"]; ?>
		<?php echo "($" . $row["amount"] ." by ". $row["end_date"] . ")";?>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo round($percentage, 2). "%" ;?>">
            <?php echo round($percentage, 2) ?>%
          </div>
        </div>
<?php
		$count++;
	}
}
else{
	echo "No goals";
}

?>

