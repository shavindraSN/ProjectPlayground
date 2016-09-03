<?php
echo "<h1>Heading</h1><br>";

echo "SUM IS : ".SUM(10,20);
echo "Multiplication IS : ".MUL(50,33);

function SUM($x,$y) {
    $sum=$x+$y;
    return $sum;
}
function MUL($x,$y) {
    $mul=$x*$y;
    return $mul;
}