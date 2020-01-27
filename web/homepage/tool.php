<?php

for ($i = 0; $i < 1000; $i++) {
    $randNumber = mt_rand(0, 5);
    $class = ["", "", "","", "too-big-letter-grid", "big-letter-grid"][$randNumber];
    // echo $class;

    echo "<div class=\"letter $class\">$i</div>";
}
die();
$i = 1;
while ($i--) {
    echo
        '0% {
        text-shadow: 0 0 30px #fff
    }';
    for ($num = 1; $num < 1000; $num++)
        echo '

    ' . $num . '% {
        text-shadow: 0 0 30px rgb(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ')
    }';
    echo '
    100% {
        text-shadow: 0 0 30px #fff
    }';
}
