<!DOCTYPE html>
<html lang="es">
<head></head>
<body
<?php 
class  matematicas
{
var $number1;
var	$number2;
	
	
  function matematicas($number1, $number2)
  {	 
     $this->number1=$number1;
     $this->number2=$number2;
     }
  
  function suma()
  {
	  
	  return ($this-> number1 + $this->number2);  
    }
  
   function resta()
  {
	  
	  return ($this-> number1 - $this->number2);	  
     }
	
	 function multiplicacion()
  {
	  
	  return ($this-> number1 * $this->number2);	  
     } 
	 
	  function division()
  {
	  
	  return ($this-> number1 / $this->number2);	  
     }
   	 
	 


}
?>
</body>
</html>