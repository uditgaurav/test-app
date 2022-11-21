<!DOCTYPE html>
<html>
<body>

<?php  
$a = 2;
$b = 5;
$amt = 100000;
 
for ($x = 1; $x <= 1000000; $x++) {

  $amt = $amt - $a - $b;
  if ($amt < "0") {
    $q = $x - 1;
  	echo "The Quantity for both stocks is: $q";
    echo "<br><br>";
    $p = $q - fmod($q, 50);
    echo "[QUANTITY]: The Suggested quantity to sell: $p";
    $a = $a - ($a*0.05);
    $b = $b - ($b*0.05);
    echo "<br><br>";
    echo "[PRICE]: price for quantity A: $a";
    echo "<br><br>";
    echo "[PRICE]: price for quantity B: $b";
    break;
  }
} 
?>  

</body>
</html>
