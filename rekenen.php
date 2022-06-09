<?php
$x = rand(1,1000);
$y = rand(1,1000);
$z = 6;
$r = 10;

echo "$x + "."$y = ".($x + $y)."<br>";
echo "$x - "."$y = ".($x - $y)."<br>";
echo "$x x "."$y = ".($x * $y)."<br>";
echo "$x / "."$y = ".($x / $y)."<br>";

$i = 1;
while ($i <= $r) {
    echo "\t", $i, " * ", $z, " = ", $z * $i,"<br>";
    $i++;
}
?>