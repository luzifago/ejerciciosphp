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
<?php

$PRECIO=700;
$numero_pc=readline("cuantos equipos desea comprar \n");

if ($numero_pc<5 ){
    $descuento=0.1;
   
    echo" por la compra de $numero_pc computadores su descuento es de $descuento \n";
}

elseif($numero_pc<10){
    $descuento=0.2;
    echo"por la compra de $numero_pc  computadores su descuento es de $descuento \n";
}
else{
    echo "mas de 10 computadores su descuento es de 0.40 \n";
}

$sueldo=readline("cuanto gana mensulamente");
$descuento=0.10;
$nuevosueldo=$sueldo*$descuento;
$nuevosueldo=$sueldo-$nuevosueldo;
echo "aplicando el descuento correspondiente a su salario le informamos que su nuevo salario es de $nuevosueldo \n";


$numero=readline("ingrese un numero");
if ($numero>10){
echo "correcto 10 es mayor que diez";
}
else if ($numero==10){
echo "correcto $numero es igual a 10 \n";
}
else{
    echo" el numero impreso es menor que diez \n";
}


$nombre=readline("ingrese su nombre \n");
if ($nombre=="juan"){
echo "hola juan \n";
}
else {
    echo "lo siento, no te conozco \n";
}


$numero=readline("ingrese un nuero de 1 a 7 \n");
switch ($numero){
    case "1":
        echo "lunes \n";
        break;
        case "2":
            echo "martes \n";
            break;
            case "3":
                echo "miercoles \n";
                break;
                case "4":
                    echo"jueves \n";
                    break;
                    case "5":
                        echo "viernes \n";
                        break;
                        case "6":
                            echo "sabado \n";
                            break;
                            case "7":
                                echo "domingo \n";
                                break;
                                default : echo "numero invalido \n";

}
$numero =intval(readline("ingrese un numero del 1 al 7\n"));

if($numero <= 7){
    if ($numero == 1){
        echo "dia lunes \n";
    }
    elseif ($numero == 2){
        echo "dia martes \n";
    }
    elseif ($numero == 3){
        echo "dia miercoles \n";
    }
    elseif ($numero == 4){
        echo "dia jueves \n";
    }
    elseif ($numero == 5){
        echo "dia viernes \n";
    }
    elseif($numero == 6){
        echo "dia sabado \n";
    }
    elseif($numero == 7){
        echo "dia domingo \n";
    }
}else{
    echo "numero inválido \n";
}
$edad =readline("ingrese su edad \n");

if ($edad >= 18){
    $licencia = readline("tienes licencia de conducir \n");
    if ($licencia == "si"){
        echo "pudes conducir \n";
    }
    elseif ($licencia == "no"){
        echo "debes obtener una licencia de conducir primero \n";
    }
}if($edad < 18){
    echo "no pudes conducir no tienes la edad sufuciente \n";
}
$numeroa =intval(readline("numero A \n "));
$numerob =intval(readline("numero B \n "));


if($numeroa > 10 && $numerob > 10){
    echo "ambos numeros son mayores que 10 \n";
} elseif($numeroa >10 OR $numerob >10){
    echo "solo uno de los numeros es mayor que 10 \n";
} else{
    echo "Ninguno de los números es mayor que 10 \n";
}
?>

