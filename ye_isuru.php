<!--
<html>
<body>
<h1>Prova PHP</h1>
<?php
for($c=0;$c<20;$c++)
print("Ye! <br>");
?>

</body>
</html>
--> 

<html>
<head>
<title>Tabelline!</title>
</head>
<body>
<h1>Tabelline!</h1>
 <form action="ye_isuru.php" method="GET">
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
