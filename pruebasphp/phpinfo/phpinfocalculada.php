<html>
<head>
<tittle>Prueba de php calculada</tittle>
</head>
<body>
<br>
<?php

if($_SERVER["REMOTE_ADDR"]=='10.15.24.137'){
echo "estas accediendo desde la maquina servidor"; 
}
elseif($_SERVER["REMOTE_ADDR"] < '10.15.24.137'){
echo "la ip es menor que la del servidor"; 
}
elseif($_SERVER["REMOTE_ADDR"] > '10.15.24.137'){
echo "la ip es mayor que la del servidor"; 
}
?>
</body>
</html>
