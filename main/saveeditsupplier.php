<?php
	include('../connect.php');
	$id = $_POST['memi'];
	$a = $_POST['name'];
	$b = $_POST['address'];
	$c = $_POST['contact'];
	$d = $_POST['cperson'];
	$x = $_POST['balance'];
	$e = $_POST['note'];
	// query
	$sql = "UPDATE supliers 
	        SET suplier_name=?, suplier_address=?, suplier_contact=?, contact_person=?, suplier_balance=?, note=?
			WHERE suplier_id=?";
	$q = $db->prepare($sql);
	$q->execute(array($a,$b,$c,$d,$x,$e,$id));
	header("location: supplier.php");
