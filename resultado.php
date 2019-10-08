<?php  
session_start();
if (!isset($_SESSION['logado'])) {
	header('location: index.php');
}
if (!isset($_SESSION['p5'])) {
	header('location: p5.php');
}
$resultados = 0;

if ($_SESSION['desenhos'] == 'My Little Pony') {
	echo 'Você acertou, o preferido dele é My Little Pony<br>';
	$resultados++;
}else{
	echo 'Você errou, o preferido dele é My Little Pony<br>';
}
if ($_SESSION['personagens'] == 'Batman') {
	echo 'Você acertou, ele é O Batman das Filipinas<br>';
	$resultados++;
}else{
	echo 'Você errou, ele é O Batman das Filipinas<br>';
}
if ($_SESSION['cinquenta'] == 'pinga') {
	echo 'Você acertou, 51 é Pinga!<br>';
	$resultados++;
}else{
	echo 'Você errou, 51 é Pinga!<br>';
}
if ($_SESSION['pi'] == '3.1415926535') {
	echo 'Você acertou, os 10 primeiros decimais de Pi são: 3.1415926535<br>';
	$resultados++;
}else{
	echo 'Você errou, os 10 primeiros decimais de Pi são: 3.1415926535<br>';
}

echo '<br><br>Você acertou um total de '.$resultados.'/4';

?>


<meta charset="utf-8">
