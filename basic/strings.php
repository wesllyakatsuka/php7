<?php
require("pula-linha.php");

$nome = "Weslly Akatsuka";

echo $nome; 
pulaLinha2();

//Transforma todas as letras em maiúsculas
echo strtoupper($nome);
pulaLinha2();

//Transforma todas as letras em minúsculas
echo strtolower($nome);
pulaLinha2();

//Função que substitui letras
$empresa = "Senac";
$empresa = str_replace("e", 3, $empresa);
$empresa = str_replace("c", "K", $empresa);
echo $empresa;
pulaLinha2();

//conta a quantidade  de palavras na frase
$frase = "A repetição é a mãe da retenção";
$q = strpos($frase, "mãe");
var_dump($q);
pulaLinha2();
?>