
<?php

setcookie("ye_isuru","5bi",time()+(86400*30));

if(! isset($_COOKIE["ye_isuru"])){


print("cookie non esiste; lo creo! \n");
print("<br>ip:".$_SERVER['REMOTE_ADDR']);
}
else{
	print("cookie esistente \n".$_COOKIE["ye_isuru"]);
	print("<br> ip: \n".$_SERVER['REMOTE_ADDR']);
}





?>





<html>
<head>
<title>Cookie!</title>
</head>
<body>

<h1>Tabelline!</h1>
 <form action="ye_isuru_cookie_es1.php" method="GET">
Primo numero:<br>
<input type="text" name="firstNum">
<br>
Secondo numero:<br>
<input type="text" name="secondNum">
<input type="submit" value="Invia">
</form> 

<?php
	$num1=$_REQUEST["firstNum"];
	$num2=$_REQUEST["secondNum"];

	print(" <table border=2> ");
        for($i=1; $i<=$num1; $i++){
            print ("<tr>");
            for($k=1; $k<=$num2; $k++){
                print ("<td>".($i*$k)."</td>");
            }
            print("</tr>");
        }
        print("</table>");

?>
</body>
</html>
