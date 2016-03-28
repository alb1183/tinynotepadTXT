<?php
	require("head.php");
		
	$fichero = fopen('texto.txt', "r");
	$jsondata['titulo'] = $titulo;
	$contenido = '';

	while(!feof($fichero)) {
	  $contenido .= fgets($fichero);
	}

	/*if(utf8_encode($contenido)){
		$contenido = utf8_encode($contenido);
	}*/

	fclose($fichero);
	
	echo "<h1 style='margin: -5px 5px 5px; text-align: center;'>TinyNotepad</h1>";
	
	echo "<textarea id='file_data' class='textareastyle2'>".$contenido."</textarea>";
	
	echo "<script> $('#file_data').linkify(); </script>";
	
	require("footer.php"); 
?>
