<?php  
session_start();
if (!isset($_SESSION['logado'])) {
	header('location: index.php');
}
if ($_POST) {
$_SESSION['desenhos'] = $_POST['desenhos'];
$_SESSION['p2'] = $_POST['p2'];
header('location: p3.php');
}
if (isset($_SESSION['p2'])) {
  header('location: p3.php');
}
?>

Qual o desenho favorito do Prof. Paulo(vulgo Félix)?
<meta charset="utf-8">
<form method="post" >
	 <input type="hidden" name="p2" value="passep2">
  <select name="desenhos">
    <option value="Meninas Superpoderosas">As Meninas Superpoderosas</option>
    <option value="My Little Pony">My Little Pony</option>
    <option value="As Winx">As Winx</option>
    <option value="3 Espiãs é demais!">3 Espiãs é demais!</option>
  </select>
  <br><br>
  <input type="submit">
</form>