<?php
// Start the session

session_start();
?>
<!DOCTYPE html>
<html>
	<title>Login</title>
<body>

<form action="sessioni.php" method="GET">
Nome utente:<br>
<input type="text" name="user"  placeholder="username">
<br>
Password:<br>
<input type="password" name="psw"  placeholder="**********">
<input type="submit" value="Invia">
</form> 

<?php
$user=$_REQUEST["user"];
$psw=$_REQUEST["psw"];
$_SESSION["user"] = $user;
$_SESSION["psw"] = $psw;
if (empty($_REQUEST['user']) || empty($_REQUEST['psw'])) {
echo("Username or Password is invalid");
}
else{
if(isset($_SESSION["user"])){
		echo("Benvenuto ".$user."!");
		
	}
}
?>

</body>
</html>
