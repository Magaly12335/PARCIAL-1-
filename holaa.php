<html>
<head></head>
<body>
<h1>12655. C09</h1>

<h2>Descripción</h2>
Escribe un programa que solicite las calificaciones de 
Matemáticas, 
Español y Cocina y nos de su promedio.

<h2>Entrada</h2>
Tres números reales

<h2>Salida</h2>
Un número real representado el promedio de los tres número

<h2>Ejemplo</h2>
<h3>Entrada Salida</h3>
<table border="1">
<tr>
    
<th>10 9.5 9.0   </th>
<th>    9.5</th>
</tr>
</table>

<?php
# CODIGO PHP PARA EL PROMEDIO
$a=10;
$b=9.5;
$c=9.0;

# OPERACION
$pro=$a+$b+$c;
$sss=$pro/3;
echo "<br>";
echo "Variables a, b y c: <br>";
echo "a: ", $a, "<br>";
echo "b: ", $b,"<br>";
echo "c: ", $c, "<br>";
echo "Promedio: ", $sss;
?>


</body>
</html>