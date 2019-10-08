<?php  
session_start();
if (!isset($_SESSION['logado'])) {
	header('location: index.php');
}
if ($_POST) {
$_SESSION['personagens'] = $_POST['personagens'];
$_SESSION['p3'] = $_POST['p3'];
header('location: p4.php');
}
if (!isset($_SESSION['p2'])) {
  header('location: p2.php');
}
if (isset($_SESSION['p3'])) {
  header('location: p4.php');
}
?>

Com qual personagem o Prof. Wellington se identifica?
<meta charset="utf-8">
<form method="post">
		 <input type="hidden" name="p3" value="passep3">

  <select name="personagens">
    <option value="Batman">Batman(das Filipinas)</option>
    <option value="Superman">Superman</option>
    <option value="Thanos">Thanos</option>
    <option value="Dr. Estranho">Dr. Estranho</option>
  </select>
  <br><br>
  <input type="submit">
</form>