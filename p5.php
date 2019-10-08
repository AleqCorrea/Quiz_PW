<?php  
session_start();
if (!isset($_SESSION['logado'])) {
	header('location: index.php');
}
if ($_POST) {
$_SESSION['pi'] = $_POST['pi'];
$_SESSION['p5'] = $_POST['p5'];
header('location: resultado.php');
}
if (!isset($_SESSION['p4'])) {
	header('location: p4.php');
}
if (isset($_SESSION['p5'])) {
  header('location: resultado.php');
}
?>

Quais são os 10 primeiros valorez decimais de PI?
<meta charset="utf-8">
<form method="post">
	 <input type="hidden" name="p5" value="passep5">
  <select name="pi">
    <option value="3.1415926535">3.1415926535</option>
    <option value="3.1412116535">3.1412116535</option>
    <option value="3.1412323535">3.1412323535</option>
    <option value="3.1415264335">3.1415264335</option>
  </select>
  <br><br>
  <input type="submit">
</form>