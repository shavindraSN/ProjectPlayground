<?php
echo "<h1>Heading</h1><br>";

echo "SUM IS : ".SUM(10,20);
echo "Multiplication IS : ".MUL(50,33);

function SUM($x,$y) {
    // sum variable removed
    return ($x+$y);
}
function MUL($x,$y) {
    $mul=$x*$y;
    return $mul;
}
function SUB($x,$y) {
    $sub=$x-$y;
    return $sub;
}
function DIV($x,$y) {
    $div=$x/$y;
    return $div;
}
