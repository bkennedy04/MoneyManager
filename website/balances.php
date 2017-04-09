<?php

include	"connect_db.php";

$query1="SELECT date FROM transactions WHERE user_id = ".$_SESSION["id"];
$query2="SELECT account_balance FROM transactions WHERE user_id = ".$_SESSION["id"]." ORDER BY date";
$result1=$conn->query($query1);
$result2=$conn->query($query2);

echo "[";
if($result2->num_rows>0){
		while($row=$result2->fetch_assoc()){
			echo $row["account_balance"].",";
	}	}
	else{
	echo "0 results";}

echo "]"; 
?>