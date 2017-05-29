<html>
	<head>
		<title>
			FARMASIS
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
    <script language="javascript" type="text/javascript">
		<?php /*Visit http://www.yaldex.com/ for full source code
		and get more free JavaScript, CSS and DHTML scripts! */?>
		Begin
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
	</SCRIPT>

	<body>
		<?php include('navfixed.php');?>
		<div class="container-fluid">
		    <div class="row-fluid">
				<div class="span2">
				    <div class="well sidebar-nav">
							<?php include("enlacesSideBar.php"); ?>      
					</div><!--/.well -->
				</div><!--/span-->
				<div class="span10">
					<div class="contentheader">
						<i class="icon-group"></i> Acerca de
					</div>
					<ul class="breadcrumb">
						<li><a href="index.php">Tablero</a></li> /
						<li class="active">Acerca de</li>
					</ul>

					<img src="img/magen.png" />
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
							url: "deleteDoctor.php",
							data: info,
							success: function(){
							}
						});
						$(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
						.animate({ opacity: "hide" }, "slow");
					}
					return false;
				});
			});
		</script>
	</body>
	<?php include('footer.php');?>
</html>