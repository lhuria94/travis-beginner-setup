<?php
/**
 * Test PHP Class
 */
class Test {
  public function add($a,$b) {
   return $a+$b;
  }
}

// Initialise an object.
$a = new Test();
$a = $a->add(2,2);
print $a;
?>
