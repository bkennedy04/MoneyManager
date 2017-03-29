<?php
include	"connect_db.php";

$query1="SELECT date from transactions order by date";
$query2="SELECT account_balance from transactions";
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