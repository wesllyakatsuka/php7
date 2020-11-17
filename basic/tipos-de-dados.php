<?php
/*
São 8 tipos de dados primitivos, divididos em 3 grupos: 
	Tipos básicos(int, float, string, double, boolean)
	Compostos(array e object)
	Tipos especiais(resource e null)
*/
//string	
$nome = "Facebbok.com";
	
//string com aspas simples
$site = 'www.fb.com';

//int
$ano = 2020;

//double
$salario = 5500.99;

//boolean
$bloqueado = false;

////////////////////////////////////////////////

//array
$frutas = array("abacaxi", "laranja", "manga");
	//echo $frutas[2]; 

//objeto
$nascimento = new DateTime();
	var_dump($nascimento);

////////////////////////////////////////////////

//resoure
$arquivo = fopen();

//null
$nulo = null;

?>