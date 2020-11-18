<?php
include("pula-linha.php");

define("SERVIDOR", "127.0.0.1");
echo SERVIDOR; //127.0.0.1
pulaLinha2();

define("BANCO_DE_DADOS",[
		'127.0.0.1',
		'root',
		'password',
		'test'
]);

print_r(BANCO_DE_DADOS);   	 /*  [0] => 127.0.0.1
   								 [1] => root
   								 [2] => password
   								 [3] => test */
pulaLinha2();

echo PHP_VERSION; //7.4.11
pulaLinha2();

echo DIRECTORY_SEPARATOR;

?>
