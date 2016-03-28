<?php
$actual_link = $_SERVER['REQUEST_URI'];
if($actual_link == "/tinynotepad/footer.php") {
	echo "<script type='text/javascript'>
			window.location='".$urlwebb."index.php';
		</script>";
	exit();
}
?>
</div>
<div id="footer">
<div id="footer-datos">
<a href="http://marial.es/utilidades/"><strong>Volver al Inicio</strong></a> - 
<a href="http://alb1183.es/">Blog</a>
</div>
</div>
<center style="position: relative; z-index: 3;">
<span style="font-family: Helvetica; color: #333; font-size: 9px;">Copyright <?=$webnombre;?> &copy Alberto R.E. 2013-<?php echo date("Y"); ?> </span>

<br>
</center>
</body>