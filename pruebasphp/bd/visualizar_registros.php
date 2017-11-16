<html>
<head>
<tittle>Prueba de bd</tittle>
</head>
<body>
    <?php
$username = root;
$password = Admin1234;
$servername = localhost;
$database = coches;
$table = bmw1;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Conexión con la base de datos $database del servidor $servername reali.<br/>";
    
    $sql = "SELECT * FROM ".$table." ORDER BY CodCoche";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result_array = $stmt->fetchAll();
    print "<table border='1px solid grey'>";
    print "<tr>";
    print "<th>";print "CodCoche";print "</th>";
    print "<th>";print "Marca";print "</th>";
    print "<th>";print "Modelo";print "</th>";
    print "<th>";print "Año";print "</th>";
    print "</tr>";
    foreach ( $result_array as $linea ) {
        print "<tr>";
        print "<td>";print $linea['CodCoche'];print "</td>";
        print "<td>";print $linea['Marca'];print "</td>";
        print "<td>";print $linea['Modelo'];print "</td>";
        print "<td>";print $linea['Año'];print "</td>";
        print "</tr>";
    }
    print "</table>";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
</body>
</html>
