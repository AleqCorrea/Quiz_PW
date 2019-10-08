<?php  
session_start();
if (!isset($_SESSION['logado'])) {
	header('location: index.php');
}
if ($_POST) {
$_SESSION['cinquenta'] = $_POST['cinquenta'];
$_SESSION['p4'] = $_POST['p4'];

header('location: p5.php');
}
if (!isset($_SESSION['p3'])) {
  header('location: p3.php');
}
if (isset($_SESSION['p4'])) {
  header('location: p5.php');
}
?>

51 é o que?
<meta charset="utf-8">
<form method="post" >
		 <input type="hidden" name="p4" value="passep4">

  <select name="cinquenta">
    <option value="Mundial">Mundial do Palmeiras</option>
    <option value="numero">Apenas um numero</option>
    <option value="pinga">Pinga</option>
    <option value="soma">A soma de 25 + 25</option>
  </select>
  <br><br>
  <input type="submit">
</form>