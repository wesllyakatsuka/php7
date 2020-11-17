<?php
include("pula-linha.php");

$nome = $_GET["a"];
var_dump($nome); 	
pulaLinha1();

//casting
$nome2 = (int) $_GET["a"];
var_dump($nome2); 	
pulaLinha1();

//BUSCA O CAMINHO E O NOME DO ARQUIVO
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip; 	
pulaLinha1();		

?>