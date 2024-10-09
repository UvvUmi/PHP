<?php

include 'Calculator.php';

$skaiciuotuvas = new Calculator();

print $skaiciuotuvas::CLASS_USE."<br>";
print "Gauta sudėtis: ".$skaiciuotuvas->sudetis(10, 15);
print "<br>Gautas skirtumas: ".$skaiciuotuvas->atimtis(15, 10);
print "<br>Gauta sandauga: ".$skaiciuotuvas->sandauga(8, 8);
print "<br>Gautas dalmuo: ".$skaiciuotuvas->dalyba(111, 10);