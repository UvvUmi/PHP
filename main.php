<?php

include 'Calculator.php';

$skaiciuotuvas = new Calculator();

print $skaiciuotuvas::CLASS_USE."<br>";
print "Gauta sudėtis: ".$skaiciuotuvas->sudetis(10, 15);
print "<br>Gauta atimtis: ".$skaiciuotuvas->atimtis(15, 10);