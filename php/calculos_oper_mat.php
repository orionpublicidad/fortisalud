<!DOCTYPE html>
<html lang="es">
<head></head>
<body
<?php 
class  matematicas
{
var $number1;
var	$number2;
var $contador= 20;
var $mayoromenor='';
	
  function matematicas($number1, $number2,$mayoromenor,$contador ){
	  	 
     $this->number1=$number1;
     $this->number2=$number2;  
	 $this->comparar_numero=$mayoromenor;  
	     }
	 
   function suma() {	  
	  return  ($this-> number1 + $this->number2); }
  
   function resta(){	  
	  return ($this-> number1 - $this->number2); }
	
   function multiplicacion(){  
	  return ($this-> number1 * $this->number2); } 
	 
   function division()  {	  
	  return ($this-> number1 / $this->number2); }
	  
	  
	function igualdad_numeros(){  
		
		if(number1 < number2){
			($this->comparar_numero = 'El numero ' .number2 .' es mayor que '.number1);} 
		else 
		
		if(number1  > number2){
			($this->comparar_numero = 'El numero ' .number1  .' es mayor que '.number2);}
				    	
		else
		if(number1 == number2)  {
		    ($this->comparar_numero = 'Los numeros ingresados son iguales');}
	
			}  
	  	  						
}  

  

?>
</body>
</html>