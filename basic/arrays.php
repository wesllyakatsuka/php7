<?php
include("pula-linha.php");

//vetor
$frutas = array("laranja", "abacaxi", "melancia");
	print_r($frutas); //Array ( [0] => laranja [1] => abacaxi [2] => melancia )
	pulaLinha2();
	var_dump($frutas); //array(3) { [0]=> string(7) "laranja" [1]=> string(7) "abacaxi" [2]=> string(8) "melancia" }
	pulaLinha2();
//-------------------------------------------------------------------------------------------------------

//matriz
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

print_r($carros[0][2]); //Onix
pulaLinha2();
print_r($carros); //Array ( [0] => Array ( [0] => GM [1] => Cobalt [2] => Onix [3] => Camaro ) [1] => Array ( [0] => Ford [1] => Fiesta [2] => Fusion [3] => Eco Sport ) )
pulaLinha2();

//-----------------------------------------------------------------------------------------------------

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Paulo',
	'idade' => '25'
));

print_r($pessoas); //Array ( [0] => Array ( [nome] => João [idade] => 20 ) [1] => Array ( [nome] => Paulo [idade] => 25 ) )
pulaLinha2();

//------------------------------------------------------------------------------------------------------------------------------

//JSON
echo json_encode($pessoas); //[{"nome":"Joao","idade":20},{"nome":"Paulo","idade":"25"}]
pulaLinha2();

$json = '[{"nome":"Joao","idade":20},{"nome":"Paulo","idade":"25"}]';
//o parametro true impede que o array seja transformado em objeto
$data = json_decode($json, true);
var_dump($data); //array(2) { [0]=> array(2) { ["nome"]=> string(4) "Joao" ["idade"]=> int(20) } [1]=> array(2) { ["nome"]=> string(5) "Paulo" ["idade"]=> string(2) "25" } }


?>