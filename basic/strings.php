<?php
require("pula-linha.php");

$nome = "Weslly Akatsuka";

echo $nome; //Weslly Akatsuka
pulaLinha2();

//Transforma todas as letras em maiúsculas
echo strtoupper($nome); //WESLLY AKATSUKA
pulaLinha2();

//Transforma todas as letras em minúsculas
echo strtolower($nome); //weslly akatsuka
pulaLinha2();

//Função que substitui letras
$empresa = "Senac";
$empresa = str_replace("e", 3, $empresa);
$empresa = str_replace("c", "K", $empresa);
echo $empresa; //S3naK
pulaLinha2();

//conta a quantidade  de palavras na frase
$frase = "Hoje eh um lindo dia";

$palavra = "lindo";

$q = strpos($frase, $palavra); 

			//(onde, start, fim)
$texto = substr($frase, 0, $q);
var_dump($texto); //string(11) "Hoje eh um "
pulaLinha2();

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2); //string(4) " dia"
pulaLinha2();

$name = 'Hcode Treinamentos';
 
$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, 'T')) . $replace; 
echo $new_name; //Hcode Cursos

?>