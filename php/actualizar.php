<?php
require("funciones.php");

$texto = $_POST['text'];

$fp = fopen('../texto.txt','wb');
fwrite($fp,$texto);
fclose($fp);

echo 1;

?> 