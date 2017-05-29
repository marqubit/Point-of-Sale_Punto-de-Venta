<?php
	include('../connect.php');
	$id = $_POST['memi'];
	$a = $_POST['name'];
	$b = $_POST['address'];
	$x = $_POST['balance'];
	$e = $_POST['note'];
	// query
	$sql = "UPDATE doctor 
	        SET suplier_name=?, suplier_address=?, suplier_balance=?, note=?
			WHERE suplier_id=?";
	$q = $db->prepare($sql);
	$q->execute(array($a,$b,$x,$e,$id));
	header("location: doctor.php");