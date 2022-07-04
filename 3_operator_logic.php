<?php
$a = 10;
$b = 5;
$c = 0;
$d = $a;
while ($d >= $b) {
    echo $a . 'dan' . $b . "<br />";
    $d = $d - $b;
    $c++;
    echo $c . "<br />";;
}
