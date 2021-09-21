<?php 

function soma(int ...$valores):string{

	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(3,3);
echo "<br>";
echo soma(20,20);
echo "<br>";

 ?>