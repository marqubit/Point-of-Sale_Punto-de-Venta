<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM customer WHERE customer_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditcustomerBalance.php" method="post">
	<center><h4><i class="icon-edit icon-large"></i> Editar Deuda del Cliente</h4></center>
	<hr>
	<div id="ac">
		<input type="hidden" name="memi" value="<?php echo $id; ?>" />
		<span>Cantidad: </span><input type="text" style="width:265px; height:30px;" name="amount" value="<?php echo $row['balance']; ?>" /><br>

		<div style="float:right; margin-right:10px;">
			<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Editar Adeudo </button>
		</div>
	</div>
</form>
<?php
}
?>