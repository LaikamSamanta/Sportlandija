<?php
// Sākt sesiju
session_start();
?>

<!DOCTYPE html>
<HTML>
<HEAD>
	<meta charset="UTF-8">
	<title>Administratora piekļuve</title>
</HEAD>
<BODY>
	<h1>Administratora piekļuve</h1>

	<form action="admin.php" method="post">

	<p><b>Lietotājvārds</b></p>
    <input type="text" placeholder="Ievadiet lietotājvārdu" name="username" required>
  
	<p><b>Parole</b></p>
    <input type="password" placeholder="Ievadiet paroli" name="pass" required><br><br>
  
	<button type="submit" name="login">Ieiet</button><br><br>
	
	</form>
  
</BODY>
</HTML>

<?php 
include 'funkcijas.php';

if (isset($_POST['login'])) {
	if (isset($_POST['pass']) && isset($_POST['username']) && 
	checklogin($_POST['username'], $_POST['pass']) == true ){
	
		$_SESSION["loggedin"] = "true";
		header("Location: administracija.php");
	} 
		
	}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['loggedin']);
	header("Location: admin.php");
}

if (isset($_GET['incorrect'])) {
	echo "Lietotājvārds un/vai parole nav pareiza!";
}
?>