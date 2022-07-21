<?php
    // Include config file
    require_once "config.php";
	
	$iduser = $_GET['iduser'];
	$idbook = $_GET['idbook'];
	          
    // Attempt insert
    $sqlinsert = "INSERT INTO borrows(iduser, idbook, date_borrowed) VALUES (".$iduser.",".$idbook.",CURRENT_TIMESTAMP())";
	
	mysqli_query($link, $sqlinsert);
	
	echo "OK";
    
?>