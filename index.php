<?php
session_start();

if ($_POST) {
	$_SESSION['nome'] == $_POST['nome'];
	$_SESSION['email'] == $_POST['email'];
	$_SESSION['login'] == $_POST['login'];
	$_SESSION['logado'] = true;
	header('location: p2.php');
}
if (isset($_SESSION['logado'])) {
  header('location: p2.php');
}
?>
<input type="hidden" name="login" value="passelogin">
<form method="post">
	Nome<input type="text" name="nome"><br>
	Email<input type="email" name="email"><br>
	<input type="submit" value="Entrar">
</form>