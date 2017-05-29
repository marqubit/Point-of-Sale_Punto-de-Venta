<?php
	include('../connect.php');
	$id = $_POST['memi'];
	$x = $_POST['balance'];
	// query
	$sql = "UPDATE supliers 
	        SET suplier_balance=?
			WHERE suplier_id=?";
	$q = $db->prepare($sql);
	$q->execute(array($x,$id));
	header("location: supplier.php");
	