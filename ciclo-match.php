<?php
$entrada=readline("ingrese un numero del 1 al 5");
$accion=match ($entrada) {
     "1"=> "ir de compras\n",
     "2"=> "salir de paseo\n",
     "3"=> "hora de salir\n",
     "4"=>"salir a comer\n",
     "5"=>"hora de ir a descansar\n",
     default=>"sin comentario\n",
};
echo"$accion\n";

$hora=readline("ingrese la hora(HH/MM)\n");
 $mensaje=match ($hora) {
    $hora >= '06:00' && $hora <'11:59'=>"Buenos dias\n",
    $hora >= '12:00' && $hora <'17:59'=>"Buenas tardes\n",
    $hora >= '18:00' && $hora <'23:59'=>"Buenas noches\n",
    $hora >= '00:00' && $hora <'05:59'=>"la madrugada\n",
 };
 echo"mensaje\n";
 

$texto=readline("ingrese una cadena de texto\n");
$longitud=strlen($texto);
$longitud=match (true) {
     $longitud<=5 =>"esta cadena es corta\n",
    $longitud<=15 =>"esta cadena de texto es mediana\n",
    $longitud<=20 =>"esta cadena de texto es larga\n",
    $longitud>=25 =>"esta cadena de texto es extensa\n",
};
echo"$longitud";

$nota=readline("ingrese sunota (del 1 al 100)\n");
$calification=match (true) {
    $nota<=50 => "reprobaste\n",
     $nota<=70 => "aprobaste\n",
     $nota<=90 => "excelente\n",
     $nota<=100 => "sobresaliente\n",
};
echo"$calification";

$mes=readline("ingrese un numero del 1 al 12\n");
$resul=match ($mes) {
     "1"=>"enero\n" ,
     "2"=> "febrero\n",
     "3"=>"marzo\n",
     "4"=>"abril\n",
     "5"=>"mayo\n",
     "6"=>"junio\n",
     "7"=>"julio\n",
     "8"=>"agosto\n",
     "9"=>"septiembre\n",
     "10"=>"octubre\n",
     "11"=>"noviembre\n",
     "12"=>"diciembre\n",
     default=>"no existe\n",
};
echo"$resul";

$dia=readline("ingrese un numero del 1 al 7\n");
$Validar=match ($dia) {
    "1" =>"lunes\n",
    "2" =>"martes\n",
    "3"=>"miercoles\n",
    "4"=>"jueves\n",
    "5"=>"viernes\n",
    "6"=>"sabado\n",
    "7"=>"domingo\n",
    default=>"no existe\n",
};
echo"$Validar";

$fecha=readline("ingrese la fecha (Dia/Mes/Año)\n");
$mes=substr($fecha,3,2);
$mensaje=match ($mes) {
     "01"=> " Enero es el primer mes del año\n",
     "02"=> " Febrero mes del carnal \n",
     "03"=> " Marzo hace referencia al planeta marte\n",
     "04"=> "Abril es el inicio de la primavera\n",
     "05"=> "mayo se celebra el trabajo\n",
     "06"=> "junio este mes es didicado al medio ambiente\n",
     "07"=> "julio este mes hace referencia al planeta jupiter\n",
     "08"=> "agosto es comocido por los vientos\n",
     "09"=> "septiembre es el mes internacional del chocolate\n",
     "10"=> "octubre mes internacional del cafe\n",
     "11"=> "noviembre mes de la unesco\n",
     "12"=> "diciembre mes de la navidad\n",
     default=>"no hay mensaje disponible\n",

};
echo"$mensaje";

$letra=readline("ingrese una letra de la a a la z, o un numero\n");
$mostrar=match ($letra) {
     "a","e","i","o","u",=> "esta letra es una vocal\n",
    "0","1","2","3","4","5","6","7","8","9"=>"esto es un numero\n",
    default=>"esto es una consonante\n",
};
echo$mostrar;

$color=readline("ingrese un color primario\n");
$sig=match ($color) {
     "amarillo"=>"representa alegria\n" ,
     "azul"=> "representa seguridad\n",
     "rojo"=> "representa valentia\n",
};
echo$sig;
$num=readline("ingrese un numero del 1 al 3\n");
$mensaje=match ($num) {
    "1"=> "buen dia\n",
    "2"=> "buenas tardes\n",
    "3"=> "buenas noches\n",
    default=>"sin mensaje\n",
};
echo"$mensaje\n";

$edad=readline("ingrese su edad\n");
$resul=match (true) {
    $edad>=60 => "eres de la tercera edad\n",
    $edad>=30 => "eres un adulto\n",
    $edad>=10 => "eres un niño\n",
};
echo$resul;
$color=readline("ingrese un color\n");
$action=match ($color) {
    "rojo" =>"detenerse\n",
    "amarillo" =>"precaucion\n",
    "verde"=>"avanzar\n",
    default=>"color desconocido\n",
};
echo $action;

$dia=readline("ingrese un numero del 1 al 7\n");
switch($dia){
    case"1":
        echo"es lunes\n";
        break;
        case"2":
            echo"es martes\n";
            break;
            case"3":
                echo"es miercoles\n";
                break;
                case"4":
                    echo"es jueves\n";
                    break;
                    case"5":
                        echo"es viernes\n";
                        break;
                        case"6":
                            echo"es sabado\n";
                            break;
                            case"7":
                                echo"es domingo\n";
                                break;
                                default:echo"fuera de rango\n";


}
$edad=readline("ingrese su edad\n");
$genero=readline("ingrese su genero(masculino/femenino)\n");
if($edad>=60&&$genero=="masculino"){
    echo"ya te puedes pensionar\n";
}
else if($edad>=54&&$genero=="femenino"){
    echo"ya te puedes pensionar\n";
}
else{
    echo"no te puedes pencionar aun\n";
}
$PRECIO=100;
$cant=readline("ingrese cantidad\n");
$sub=$PRECIO*$cant;
$des=($cant>=3)?($sub*0.20):($sub*0.10);
$total=$sub-$des;
echo"por la compra de $cant camisas el total a pagar es $total\n";


$numero1=readline("ingrese un numero\n");
$numero2=readline("ingrese un numero\n");
if ($numero1>=10&&$numero2>=10){
    echo"ambos numeros son mayores que diez\n";
}
else if($numero1<10&&$numero2<10){
    echo"ambos numeros son menores que diez\n";
}
else{
    echo"solo uno es mayor que diez\n";
}
$edad=readline("ingrese su edad\n");
$licencia=readline("tiene licencia de conduccion (si/no)\n");
if($edad>=18&&$licencia==="si"){
    echo"puedes conducir\n";
}
else if($edad>=18&&$licencia==="no"){
    echo"saca tu licencia primero\n";
}
else {
    echo"no tienes la edad suficiente\n";
}
$dia=intval(readline("ingrese un numero del 1 al 7\n"));
switch($dia){
    case"1":
        echo"es lunes\n";
        break;
        case"2":
            echo"es martes\n";
            break;
            case"3":
                echo"es miercoles\n";
                case"4":
                    echo"es jueves\n";
                    break;
                    case"5":
                        echo"es viernes\n";
                        break;
                        case"6":
                            echo"es sabado\n";
                            break;
                            case"7":
                                echo"es domingo\n";
                                break;
                                default:echo"fuera de rango\n";
}
$nombre=readline("ingrese su nombre\n");
if($nombre=="juan"){
    echo"hola Juan, bienvenido\n";
}
else{
    echo"lo siento no te conozco\n";
}
$numero=intval(readline("ingrese un numero\n"));
if($numero==10){
    echo"este numero es igual a diez\n";
}
else if($numero<10){
    echo"este numero es menor que diez\n";
}
else{
    echo"este numero es mayor que diez\n";

}
$PRECIO=700;
$cantidad=readline("ingrese la cantidad de equipos que desea comprar\n");
if ($cantidad<5){
    $descuento=0.10;
    echo"por la compra de $cantidad equipos tiene un descuento de $descuento\n";
}
else if ($cantidad>=5&&$cantidad<10){
    $descuento=0.20;
    echo"por la compra de $cantidad equipos tiene un descuento de $descuento\n";
}
else{
    echo"por la compra de $cantidad equipos su descuento es del 0.40\n";
}
?>