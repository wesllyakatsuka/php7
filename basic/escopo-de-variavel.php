<?php

$nome = "Weslly";

function escreve(){
	//É necessário usar a palavra reservada global para que a variável seja usada na função. Senão ela será local...
	global $nome;
	echo $nome;
}

function escreve2(){
	global $nome;
	echo $nome . " Função teste2();";
}

escreve();
escreve2();

?>