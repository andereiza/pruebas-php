<html>


<?php
//fecha actual

$dia=date(j);
$mes=date(n);
$ano=date(Y);

//fecha de nacimiento

$dianaz=$_POST['dia'];
$mesnaz=$_POST['mes'];
$anonaz=$_POST['año'];

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mesnaz == $mes) && ($dianaz > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mesnaz > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anonaz);
print $edad;
?>
<br>


<?php
$numero=$_POST['numero'];
$doble=$numero*2;
print $doble;
?>
<br>

<?php echo 'Hola ', htmlspecialchars($_POST['nombre']); ?> 
<br>
<?php echo 'Tienes ', ($edad) , ' años'; ?>
<br>
<?php echo 'El doble del numero que as metido es: ',($doble); ?>

</html>
