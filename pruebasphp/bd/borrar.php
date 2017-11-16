<?php
include("conectatu.php");

$link=Konektatzea();
$Presi_DNI=$_GET['Presi_DNI'];
mysql_query("delete from direktiba where Presi_DNI = $Presi_DNI",$link);
header("Location: ezabatu.php");
?>
