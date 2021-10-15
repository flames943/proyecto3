<?php 

header('Content-Type: text/html; charset=UTF-8');
//ubicacion csv 
define('CSV', $_FILES['archivo']['tmp_name']);
 
//leer csv 
$readCsv = array_map('str_getcsv', file(CSV)); 
?> 
<html> 
<head>
<meta charset="ISO-8859-1">
        <title>TABLA</title>
    </head>
 <table border="1"> 
 <?php 
 //recorremos filas del csv 
 foreach ($readCsv as $itemCsv) { 
   echo '<tr>'; 
   //recorremos celdas del csv 
    foreach ($itemCsv as $elementoItemCSV) { 
     echo '<td>'; 
     //mostramos la celda 
     echo utf8_encode($elementoItemCSV);
     echo '</td>'; 
    } 
    echo '</tr>'; 
   } 
  ?> 
 </table> 
</html> 