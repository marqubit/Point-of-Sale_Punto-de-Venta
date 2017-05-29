<html>
<head>
<title>
POS
</title>
<?php
	require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	


</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<body>
<?php include('navfixed.php');?>

<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='Cashier') {
?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
             <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Tablero  </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Ventas </a>  </li>             
			<li class="active"><a href="customer.php"><i class="icon-group icon-2x"></i> Clientes </a>                                    </li>
			<br><br><br><br><br><br>
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Hora: <br></font>&nbsp;<input style="width:150px;" type="text" class="trans" name="face" value="" disabled>
			</form>
			  </div>
			</li>
				
				</ul> 
<?php
}
if($position=='admin') {
?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Tablero  </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Ventas </a>  </li>             
			<li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Productos</a></li>
			<li class="active"><a href="customer.php"><i class="icon-group icon-2x"></i> Clientes </a></li>
			<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Proveedores</a></li>
			<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Reporte Ventas</a> </li>
			<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Productos Vendidos</a></li>
			<br><br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">		
			<form name="clock">
			<font color="white">Hora: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				</ul>  
				<?php
}?>   
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-group"></i> Clientes
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Tablero</a></li> /
			<li class="active">Clientes</li>
			</ul>

<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Volver</button></a>
<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM customer ORDER BY customer_id DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			<div style="text-align:center;">
			Número Total de Clientes: <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
</div>
<input type="text" name="filter" style="padding:15px;" id="filter" placeholder="Buscar Cliente..." autocomplete="off" />
<a rel="facebox" href="addcustomer.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Agregar Cliente</button></a><br><br>

<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="17%"> Nombre Completo </th>
			<th width="10%"> Direccion </th>
			<th width="10%"> Numero de Contacto</th>
			<th width="23%"> Nombre Producto</th>
			<th width="9%"> Total </th>
			<th width="17%"> Notas </th>
			<th width="9%"> Fecha de Vencimiento </th>
			<th width="9%"> Deuda </th>
			<th width="17%"> Accion </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM customer ORDER BY customer_id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['customer_name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['prod_name']; ?></td>
			<td>P <?php echo $row['membership_number']; ?>.00</td>
			<td><?php echo $row['note']; ?></td>
			<td><?php echo $row['expected_date']; ?></td>
            <td><?php echo $row['balance']; ?></td>
			<td>
			<a  title="Clic para editar adeudo del Cliente" rel="facebox" href="editcustomerBalance.php?id=<?php echo $row['customer_id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Deuda </button></a>
			<a  title="Clic para editar cliente" rel="facebox" href="editcustomer.php?id=<?php echo $row['customer_id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Editar </button></a> 
			<a href="#" id="<?php echo $row['customer_id']; ?>" class="delbutton" title="Clic para eliminar"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Borrar</button></a>

			</td>
			</tr>
			<?php
				}
			?>
		
	</tbody>
</table>
<div class="clearfix"></div>

</div>
</div>
</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {
$(".delbutton").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are you sure want to delete? There is NO undo!")){
 $.ajax({
   type: "GET",
   url: "deletecustomer.php",
   data: info,
   success: function(){
   }
 });
    $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");}
	return false;
	});
});
</script>
</body>
<?php include('footer.php');?>
</html>