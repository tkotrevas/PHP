<?php
$nome = "Vitor"; //string
$email = "vitorlcn001@gmail.com";  //string

$ano = 2001;  // int

$salario = 1800.99; // float

$bloqueado = false; //boolean

/////////////////////////////////////////////

$frutas = array("abacaxi", "laranja", "melancia");  // array

$nascimento = new DateTime();

////////////////////////////////////////////

$arquivo = fopen("teste.txt", "a"); //resource

$nulo = NULL; // nulo <> vazio
////////////////////////////////////////////

$nome = (int)$_GET["a"];  //mudança de tipo porque GET e POST sempre vem string

$ip = $_SERVER["REMOTE_ADDR"]; //IP do usuario

?>