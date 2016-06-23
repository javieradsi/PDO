<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$doc=$_POST["documento"];
	$nom=$_POST["nombres"];
	$ape=$_POST["apellidos"];
try{
	$conexion=new PDO('mysql:host=sql5.freemysqlhosting.net; dbname=sql5124996','sql5124996','c2d2UyxQzL') ;

	echo "Conexion OK";

	}catch(Exception $e){
	die ('Error:'. $e->GetMessage());

	}
	/*finally{
	$conexion=null;}*/
     
$sql="INSERT INTO aprendices(documento,nombres,apellidos)VALUES
                  (:documento, :nombres, :apellidos)";
     $datos=$conexion->prepare($sql);
    // $datos->execute();
     

     $sql="SELECT * FROM aprendices";
     $datos=$conexion->prepare($sql);
     $datos->execute();

     while ($registro=$datos->fetch(PDO::FETCH_ASSOC)) {

     	echo "Documento: ".$registro['documento']."<br>";

     	echo "Nombre: ".$registro['nombres']."<br>";

     	echo "Apellido: ".$registro['apellidos']."<br>";
     }





?>


</body>
</html>