<html>
<head>
<tittle>Prueba de bd</tittle>
</head>
<body>

<?php
if ( !isset($_POST['CodCoche']) ) {
?>    

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
        CodCoche: <input type="text" name="CodCoche" size="5" /><br/>
        Marca: <input type="text" name="Marca" size="20" /><br/>
        Modelo: <input type="text" name="Modelo" size="80" /><br/>
        Año: <input type="text" name="Año" size="20" /><br/>
        <input type="submit" name="env" value="ENVIAR"/>
    </form>	   
<?php
}
else{
    $username = root;
    $password = Admin1234;
    $servername = localhost;
    $database = coches;
    $table = bmw1; 
try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    echo "CodCoche: ".$_POST['CodCoche']."<br/>";
    echo "Marca: ".$_POST['Marca']."<br/>";
    echo "Modelo: ".$_POST['Modelo']."<br/>";
    echo "Año: ".$_POST['Año']."<br/>";    
    
    $sql = "INSERT INTO ".$table." VALUES (".$_POST['CodCoche'].",'".$_POST['Marca']."','".$_POST['Modelo']."',".$_POST['Año'].")";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Coche insertado correctamente.<br/>";
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Imposible insertar el registro porque esa clave ya existe."."<br/>";
    else
        echo $e->getMessage();
}
}  
 //print "<br/><br/><br/>sql: ".$sql;
?>
</body>
</html>
