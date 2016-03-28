<?php
require("php/funciones.php");

$actual_link = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$actual_link2 = str_replace($urlweb, "", $actual_link);
if($actual_link2 == "head.php") {
	echo "<script type='text/javascript'>
			window.location='".$urlwebb."index.php';
		</script>";
	exit();
}
?>
<!DOCTYPE html>
<head>
	<meta name="GENERATOR" content="Bloc de notas y un buen par ^^">
	<meta name="author" content="alb1183">
	<meta name="description" content="Pues no se, una red social supongo :)">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?=$urlweb?>js/jquery-1.9.1.jsl"></script>
	<script type="text/javascript" src="<?=$urlweb?>js/jquery.js"></script>
	<!--<script src="https://github.com/nfrasser/linkify-shim/raw/master/linkify.min.js"></script>
	<script src="https://github.com/nfrasser/linkify-shim/raw/master/linkify-jquery.min.js"></script>-->
	<link rel="stylesheet" href="<?=$urlweb?>css/estilo.css">
	<link href="<?=$urlweb?>img/favicon.ico" rel="shortcut icon">
	<title><?=$titulo?></title>

</head>
<body id="body" style="background-attachment:fixed; background-position:center top;">

	<div id="cuerpo">
	
	<script>
		$('#body').css('background-image', 'url("<?=$urlweb?>img/noise.png")');
		$('#body').css('background-color', '#E9EAED');
		urlweb = "<?=$urlweb?>";
		webnombre = "<?=$webnombre?>";
	</script>