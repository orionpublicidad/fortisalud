<!DOCTYPE html>
<html lang="es">
<head></head>
<?php
include "calculos_oper_mat.php";
$matematicas= new matematicas($_POST['number1'], $_POST['number2']);
	
echo "<b>"."Aplicando las operaciones matematicas: "."</b>"."<br>";	
	
 if(isset($_POST['suma'])){
	
	$suma=$matematicas->suma();
	echo "la suma es: ".$suma;
	}
 if(isset($_POST['resta'])){
	
	$resta=$matematicas->resta();
	echo "la Resta es: ".$resta;}
		
 if(isset($_POST['multiplicacion'])){
	
   $multiplicacion=$matematicas->multiplicacion();
   echo "la Multiplicación es: ".$multiplicacion;}	

 if(isset($_POST['division'])){
	
   $division=$matematicas->division();
   echo "la División es: ".$division;
   }
   
echo "<b>"."Aplicando menor o mayor o igual que: "."</b>"."<br>";	   	
  
  	
   $comparar=$matematicas->igualdad_numeros();
    echo "el numero es ".$igualdad_numeros;
   
			
 echo "<b>"."Aplicando el Ciclo FOR: "."</b>"."<br>";	  
      


?> 

<body>
</body>
</html>