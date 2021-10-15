<?php 
header('Content-Type: text/html; charset=UTF-8');
?>

<form method="post" action="tabla.php" enctype="multipart/form-data" id="testform">
 Archivo
 <input name="archivo" type="file" id="archivo">
 <input name="boton" type="submit" id="boton" value="Subir">
</form>