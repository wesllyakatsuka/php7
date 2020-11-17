<?php
include("pula-linha.php");

// Operador de atribuição: =
$nome = "Weslly";
	echo $nome;
	pulaLinha2();

//Operador de concatenação: .
echo $nome . " " . $sobrenome = "Akatsuka";
pulaLinha2();
//----------------------------------------------
//Operadores aritméticos
$a = 10;
$b = 2;

//soma
echo $a + $b;
pulaLinha2();

//subtração
echo $a - $b;
pulaLinha2();

//multiplicação
echo $a * $b;
pulaLinha2();

//divisão
echo $a / $b;
pulaLinha2();

//resto da divisão
echo $a % $b;
pulaLinha2();

//potenciação
echo $a ** $b;
pulaLinha2();
//--------------------------------------------------
//Operador de comparação: Spaceship <=>, novidade no php7. 
$x = 50;
$y = 40;
	echo($x<=>$y);
	pulaLinha2();

//Operador de comparação
$z = 22;
$t = 22;
$q = "24";
	 if($z === $t){
		echo "igual";	
	}
	pulaLinha2();

//Null Coalescing, é para tratar valores nulos. Tinha em banco de dados e agora veio para o php
$c = null;
$d = null;
$e = 10;
	echo $c ?? $d ?? $e;
	pulaLinha2();	

//Operador de incremento
	$f = 555;
		echo ++$f;
		pulaLinha2();

?>