<?php
class CtiborD {
  public function intcalc (int $num1, int $num2, boolean $soucet, boolean $odcitani, boolean $nasobeni, boolean $deleni) {
    if ($soucet && !$odcitani && !$nasobeni && !$deleni)
      return $num1 + $num2;
    else if ($odcitani && !$soucet && !$nasobeni && !$deleni)
      return $num1 - $num2;
    else if ($nasobeni && !$soucet && !$odcitani && !$deleni)
      return $num1 * $num2;
    else if ($deleni && !$soucet && !$odcitani && !$nasobeni)
      return intdiv($num1, $num2);
    else die("chyba");
  }
}
