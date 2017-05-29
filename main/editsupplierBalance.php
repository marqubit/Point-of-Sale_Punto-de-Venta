<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM supliers WHERE suplier_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
		<form action="saveeditsupplierBalance.php" method="post">
			<center><h4><i class="icon-edit icon-large"></i> Editar Proveedor</h4></center><hr>
			<div id="ac">
					<input type="hidden" name="memi" value="<?php echo $id; ?>" />
					<span>Adeudo: </span><input type="text" style="width:265px; height:30px;" name="balance" value="<?php echo $row['suplier_balance']; ?>" /><br>
				<div style="float:right; margin-right:10px;">
					<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Guardar Cambios</button>
				</div>
			</div>
		</form>
<?php
}
?>