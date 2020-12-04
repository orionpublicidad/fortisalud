<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>FortiSalud-Resultado - Operaciones</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">	
</head>
<body>


<section  class="jumbotron" >
<div class="container" >
 <h2>GESTIÓN DE HOJAS DE VIDA PARA EL PERSONAL DEL HOSPITAL </h2>
    <h1><a href="index.html"><img src="../imagenes/LOGO.png" alt="" width="128" height="103" /></a><strong>FORTISALUD</strong>
    </h1>
<p>Tu Salud Nuestra razón de Ser</p>
</div>
</section >

 
 <div class="container-result" align="center">   
 <h2> Resultado de las Operaciones: </h2>
 <p>&nbsp;</p>   
 
   <p>Volver Atrás: <a href="../Operac_Matematica.html" class="btn btn-success btn-lg">
    <span class="glyphicon glyphicon-circle-arrow-left" ></span>
    </a>
    </p>
   <div class="panel panel-primary"> 
     <div class="panel-heading"></div></div>
<?php
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$contador= 20;


echo "<b>"."Aplicando las operaciones matematicas: "."</b>"."<br>";	
echo "<b>"." "."</b>"."<br>";	

 if(isset($_POST['suma'])){	
  $suma=$number1+$number2;
  
  echo "La Suma es: ".$suma."<br>";
 }
else	
  if(isset($_POST['resta'])){
   $resta=$number1-$number2;
   
  echo "La Resta es: ".$resta."<br>";  
  }
else  
  if(isset($_POST['multiplicacion'])){
   $multiplicacion=$number1*$number2;
   
  echo "La Multiplicación es: ".$multiplicacion."<br>";  
  }
else  
   if(isset($_POST['division'])){
   $division=$number1/$number2;
   
  echo "La Multiplicación es: ".$division."<br>";  
  }
  else
    echo "Por Favor seleccionar una Opcion para realizar la operación matematica "."<br>";
  
  echo "<b>"." "."</b>"."<br>";	
  echo "<b>"."Aplicando  Mayor o Menor o igual que: "."</b>"."<br>";
  echo "<b>"." "."</b>"."<br>";		 
      
	 if($number1 < $number2){		
		 echo "El numero ".$number2." es mayor que ".$number1."<br>";
		 } 
	else 
		
     if($number1  > $number2){
		echo "El numero ".$number1 ." es mayor que ".$number2."<br>";
		}
				    	
		else
	if($number1 == $number2)  {
		   echo "Los numeros ingresados son iguales"."<br>";
		   }
  echo "<b>"." "."</b>"."<br>";	 
  echo "<b>"."Aplicando Ciclo for: "."</b>"."<br>";	 
  echo "<b>"." "."</b>"."<br>";	
  
      for ($i=1; $i <= $contador; $i++) { 
			
			 echo  "$i"."<br>";}
?>
 <div class="panel panel-primary"> 
     <div class="panel-heading"></div></div>
</div>


</body>
</html>