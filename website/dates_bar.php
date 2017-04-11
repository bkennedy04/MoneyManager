<?php
include "connect_db.php";

$query1="SELECT {fn MONTHNAME(date)} AS MonthName, YEAR(date) AS Year FROM transactions WHERE user_id = ".$_SESSION["id"]." AND (YEAR(date)=@year) GROUP BY {fn MONTHNAME(date)}, YEAR(date)";
$result1=$conn->query($query1);

echo "[";
if($result1->num_rows>0){
	while($row=$result1->fetch_array()){
		echo "\"" .$row["date"] ."\",";
		}	}
	else{
	echo "0 results";}
echo"]";
	?>