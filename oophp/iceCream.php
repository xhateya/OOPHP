<?php
class IceCream {
  public $flavor;
  public $topping;

  function pick_flavor($flavor) {
    $this->flavor = $flavor;
  }
  function ask_flavor() {
    return $this->flavor;
  }
  function pick_topping($topping) {
    $this->topping = $topping;
  }
  function ask_topping() {
    return $this->topping;
  }
}

$teya = new IceCream();
$teya->pick_flavor('Vanilla');
$teya->pick_topping('Oreo');
echo "Flavor: " . $teya->ask_flavor();
echo "<br>";
echo "Topping: " . $teya->ask_topping();
?>