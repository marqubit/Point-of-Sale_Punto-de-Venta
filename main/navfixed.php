<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </a>
		  <a class="brand" href="#"><b>Punto de Venta</b></a>
		  <div class="nav-collapse collapse">
			<ul class="nav pull-right">
			    <li><a><i class="icon-user icon-large"></i> Bienvenido:<strong> <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
				<li><a> <i class="icon-calendar icon-large"></i>
				<?php
					$dia=date("l");
					if ($dia=="Monday") $dia="Lunes";
					if ($dia=="Tuesday") $dia="Martes";
					if ($dia=="Wednesday") $dia="Miércoles";
					if ($dia=="Thursday") $dia="Jueves";
					if ($dia=="Friday") $dia="Viernes";
					if ($dia=="Saturday") $dia="Sabado";
					if ($dia=="Sunday") $dia="Domingo";

					$mes=date("F");
					if ($mes=="January") $mes="Enero";
					if ($mes=="February") $mes="Febrero";
					if ($mes=="March") $mes="Marzo";
					if ($mes=="April") $mes="Abril";
					if ($mes=="May") $mes="Mayo";
					if ($mes=="June") $mes="Junio";
					if ($mes=="July") $mes="Julio";
					if ($mes=="August") $mes="Agosto";
					if ($mes=="September") $mes="Setiembre";
					if ($mes=="October") $mes="Octubre";
					if ($mes=="November") $mes="Noviembre";
					if ($mes=="December") $mes="Diciembre";

					$ano=date("Y");
					$dia2=date("d");
					//setlocale(LC_ALL,"es_ES");
					//echo strftime("%A %d de %B del %Y");
					//$Today = date('y:m:d',mktime());
					//$new = date('l, d, F, Y', strtotime($Today));
					//echo $new;
					echo "$dia, $dia2 de $mes del $ano";
				?>

			</a></li>
			<li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> Cerrar Sesión</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
	