<?php
$nombre =readline("ingrese nu nombre \n");
$apellido=readline("ingrese su apellido \n");
echo "bienvenido $nombre $apellido";


?>

<?php
$numero1=readline("ingrese numero que desee sumar \n");
$numero2=readline("ingrese numero que desee sumar \n");
$suma=$numero1 + $numero2;
echo" la suma entre $numero1 + $numero2 es igual a la $suma \n ";

?>

<?php
$numero1=readline("ingrese el numero que desea sumar, restar y multiplicar \n");
$numero2=readline("ingrese el numero que desea sumar, restar y multiplicar \n");
$suma = $numero1+ $numero2;
$resta= $numero1-$numero2;
$multiplicar= $numero1*$numero2;
echo" la suma de $numero1 + $numero2 es igual a $suma \n la resta de $numero1 - $numero2 es igual a $resta \n la multiplicacion de $numero1 * $numero2 es igual a $multiplicar";
?>

<?php
$nombre=readline("escriba su nombre completo \n");
$sueldo=readline("escriba su sueldo \n");
$aumento= ($sueldo*0.15) + $sueldo;
echo "estimado señor $nombre se le informa que su sueldo de $sueldo se le aplico un aumento del 15% es congratitud informarle que su sueldo actual es de $aumento";
var_dump ($aumento);
?>

