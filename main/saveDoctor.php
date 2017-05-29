<?php
	session_start();
	include('../connect.php');
	$a = $_POST['name'];
	$b = $_POST['address'];
	$x = $_POST['balance'];
	$e = $_POST['note'];
	// query
	$sql = "INSERT INTO doctor (suplier_name,suplier_address, suplier_balance, note) VALUES (:a,:b,:x,:c)";
	$q = $db->prepare($sql);
	$q->execute(array(':a'=>$a,':b'=>$b,':x'=>$x,':c'=>$e));
	header("location: doctor.php");