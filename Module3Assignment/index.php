<?php
#1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function FindEvenOdd ($number) {
    if ($number % 2 == 0) {
        $x =  "Even\n" ;
    } else
        $x =  "Odd\n";
    return $x;
}
echo FindEvenOdd(21);
echo FindEvenOdd(254);
echo FindEvenOdd(0);
echo FindEvenOdd(15);
?>
<?php
#2. 1+2+3+……+100  Write a loop to calculate the summation of the series
$x = 0;
for($i = 1; $i<= 100; $i++){
    $x = $x + $i;
}
echo $x;
?>

