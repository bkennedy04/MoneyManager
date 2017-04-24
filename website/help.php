<?php

if(!isset($_SESSION)) { 
    session_start(); 
} 

include "header.php";

//echo "You have reached the help page!";
?>
<embed src="img/usermanual.pdf" width="100%" height="100%" />
