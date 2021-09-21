<?php 

function teste(){
return "Hello World <br>";

}

echo teste();
echo teste();

////////////////////////////

function salario(){
return 946.00;
}

function converte($sal){
	return number_format((float)$sal, 2,',','.');  //declaro o formato do numero que eu desejo.
}

$valor =  converte(salario()*3);

echo 'Jose recebeu 3 salarios: '. $valor;

 ?>