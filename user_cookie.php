<?php
$user="";
$psw="";
?>

<html>
<head>
<title>Login Cookie!</title>
</head>
<body>

<h1>Login!</h1>
 <form action="user_cookie.php" method="GET">
Nome utente:<br>
<input type="text" name="user">
<br>
Password:<br>
<input type="password" name="psw">
<input type="submit" value="Invia">
</form> 

<?php
	$user=$_REQUEST["user"];
	$psw=$_REQUEST["psw"];
if(! isset($_COOKIE[$user])){
print("Non ci sei, creo il tuo cookie");
setcookie($user,$psw,time()+(86400*30));
}
else{
print("bentornato \n".$user."<br>"."il tuo ip è:".$_SERVER['REMOTE_ADDR']);
}
?>
</body>
</html>
