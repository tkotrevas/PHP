<?php 

$nome = "Vitor";

//echo $nome . " concatenação";   -> concatenação

$nome .= " Luciano";

echo $nome;
///////////////////////////////////
echo "<br />";
$valorTotal = 0;
$valorTotal += 100;
$valorTotal +=25;

echo $valorTotal; // -> soma 

//////////////////////////////////
echo "<br />";
$a = 10;
$b = 2;

echo $a + $b; //soma
echo "<br />";
echo $a - $b; //subtração
echo "<br />";
echo $a * $b; // multiplicação
echo "<br />";
echo $a / $b; // divisão
echo "<br />";
echo $a % $b;// resto
echo "<br />";
echo $a ** $b; // exponenciação


///////////////////////////////////
echo "<br />";

$c = 30;
$d = 55;

var_dump($c < $d); // menor que
echo "<br />";
var_dump($c > $d); // maior que
echo "<br />";
var_dump($c === $d); // == compara ===compara valor e tipo
echo "<br />";
var_dump($c != $d); // diferente
echo "<br />";

/////////////////////////////////

$e = 50;
$f = 35;
var_dump($a <=> $b); //1,0 ou -1
echo "<br />";
 ///////////////////////////////

$g = NULL;
$h = 15;
$i = 10;

echo $g ?? $h ?? $i; // verificar se a variavel é nula
echo "<br />";

///////////////////////////////

$j = 10;
echo $j++; //incrementa
echo "<br />";
echo $j;

////////////////////////////////
echo "<br />";
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
//echo $resultado;
var_dump($resultado);
echo "<br />";
$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado2);
echo "<br />";

 ?>