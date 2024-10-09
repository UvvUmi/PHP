<?php

include 'Calculator.php';

$skaiciuotuvas = new Calculator();

print $skaiciuotuvas::CLASS_USE."<br>";
print "Gauta sudėtis: ".$skaiciuotuvas->sudetis(10, 15);