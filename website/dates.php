<?php

include	"connect_db.php";

$query1="SELECT date FROM transactions WHERE user_id = ".$_SESSION["id"]." ORDER BY date";
$query2="SELECT account_balance from transactions WHERE user_id = ".$_SESSION["id"];
$result1=$conn->query($query1);
$result2=$conn->query($query2);

echo "[";
if($result1->num_rows>0){
	while($row=$result1->fetch_array()){
		echo "\"" .$row["date"] ."\",";
		}	}
	else{
	echo "0 results";}
echo"]";
	?>