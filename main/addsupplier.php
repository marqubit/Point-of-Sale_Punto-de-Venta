<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savesupplier.php" method="post">
	<center><h4><i class="icon-plus-sign icon-large"></i> Agregar Proveedor</h4></center>
	<hr>
	<div id="ac">
	<span>Nombre Proveedor : </span><input type="text" style="width:265px; height:30px;" name="name" required/><br>
	<span>Ciudad : </span><input type="text" style="width:265px; height:30px;" name="address" /><br>
	<span>Persona de Contacto : </span><input type="text" style="width:265px; height:30px;" name="contact" /><br>
	<span>Nro Contacto : </span><input type="text" style="width:265px; height:30px;" name="cperson" /><br>
	<span>Notas : </span><textarea style="width:265px; height:80px;" name="note" /></textarea><br>
	<div style="float:right; margin-right:10px;">
	<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Guardar</button>
	</div>
	</div>
</form>