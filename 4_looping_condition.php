<?php
for ($i = 0; $i < 50; $i++) {
    if (($i + 1) % 3 == 0) {
        echo 'Foo' . "<br />";
    } elseif (($i + 1) % 5 == 0) {
        echo "Bar" . "<br />";
    } else {
        echo $i + 1 . "<br />";
    }
}
