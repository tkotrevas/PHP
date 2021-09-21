<?php

$nome = "Vitor";
$sobrenome = "Luciano";
$nomeCompleto = $nome ." ". $sobrenome; //concatenação de variavel string
echo $nomeCompleto;
exit;
//var_dump($nome); -> tipo, tamanho e valor da variavel.
//unset($nome); //limpa a variavel

if (isset($nome)){ //verificar se foi definida
	echo $nome;
}


?>
