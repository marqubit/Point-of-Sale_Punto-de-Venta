<?php
	include('../connect.php');
	$id = $_POST['memi'];
	$a = $_POST['amount'];
	$sql = "UPDATE customer 
	        SET balance=?
			WHERE customer_id=?";
	$q = $db->prepare($sql);
	$q->execute(array($a,$id));
	header("location: customer.php");
