<?php
require_once("index.php");
$ct = new CtiborD();
echo("Scitani 1 + 1: ".$ct->intcalc(1, 1, true, false, false, false));
echo("Odcitani 1 - 1: ".$ct->intcalc(1, 1, false, true, false, false));
echo("Nasobeni 1 * 1: ".$ct->intcalc(1, 1, false, false, true, false));
echo("Deleni 1 / 1: ".$ct->intcalc(1, 1, false, false, false, true));
try {
    echo("Chyba deleni: ".$ct->intcalc(1, 0, false, false, false, true));
} catch (Error $e) {
    echo("Chyba deleni zachycena! ".$e->getMessage());
}
echo("Modulo 3 % 2: ".$ct->intcalc(3, 2, false, false, false, false, true));
try {
    echo("Chyba modulo: ".$ct->intcalc(1, 0, false, false, false, false, true));
} catch (Error $e) {
    echo("Chyba modulo zachycena! ".$e->getMessage());
}
echo("Faktorial 4: ".$ct->factorial(4));
