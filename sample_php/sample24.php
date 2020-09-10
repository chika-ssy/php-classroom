<?php 

function head(&$mes){ 

$mes .= "def"; 

print "¥ $mes= $mes <br>"; 

} 

$buf = "abc"; 

head($buf); 

print "¥$buf = $buf<br>"; 

?>
