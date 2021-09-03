<?php 

$nome = "Vitor";

function teste() {
	global $nome;
	echo $nome;
}

function teste2(){
global $nome;
echo $nome." agora teste2";

}

teste2();

 ?>