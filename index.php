<?php
class CtiborD {
  public function intcalc (int $num1, int $num2, bool $soucet, bool $odcitani, bool $nasobeni, bool $deleni) {
    if ($soucet && !$odcitani && !$nasobeni && !$deleni)
      return $num1 + $num2;
    else if ($odcitani && !$soucet && !$nasobeni && !$deleni)
      return $num1 - $num2;
    else if ($nasobeni && !$soucet && !$odcitani && !$deleni)
      return $num1 * $num2;
    else if ($deleni && !$soucet && !$odcitani && !$nasobeni) {
      if ($num2 == 0)
        throw new Error("Cannot divide by 2");
      return intdiv($num1, $num2);
    }
    else throw new Error("Invalid configuration");
  }
}
