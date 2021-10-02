<?php
class CtiborD {
  public function intcalc (int $num1, int $num2, bool $soucet, bool $odcitani, bool $nasobeni, bool $deleni, bool $modulo = false) {
    if ($soucet && !$odcitani && !$nasobeni && !$deleni && !$modulo)
      return $num1 + $num2;
    else if ($odcitani && !$soucet && !$nasobeni && !$deleni && !$modulo)
      return $num1 - $num2;
    else if ($nasobeni && !$soucet && !$odcitani && !$deleni && !$modulo)
      return $num1 * $num2;
    else if ($deleni && !$soucet && !$odcitani && !$nasobeni && !$modulo) {
      if ($num2 == 0)
        throw new Error("Cannot divide by 2");
      return intdiv($num1, $num2);
    } else if ($modulo && !$soucet && !$odcitani && !$nasobeni && !$deleni) {
      if ($num2 == 0)
        throw new Error("Cannot divide by 2");
      return $num1 % $num2;
    }
    else throw new Error("Invalid configuration");
  }
  public function factorial(int $num) {
    $res = 1;
    for ($i = 2; $i <= $num; $i++)
      $res *= $i;
    return $res;
  }
}
