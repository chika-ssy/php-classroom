<?php
//様々な文字表示

$a = "PHP";
$b = "MySQL';
print $a;
print "<br>";

print $a . "と" . $b . "<br>";
$a .= "と" . $b;
print $a . "<br>";

$a .= "をただいま勉強中です!";
print $a . "<br>";
print "\" PHP\"" . "と \"MySQL \""."<br>"; 
					//\"で"が表示
print "<FONT color = '#ff0000 '>" . $a . "<br>";

?>
