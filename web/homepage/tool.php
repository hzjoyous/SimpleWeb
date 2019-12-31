<?php

$i = 1;
while($i--){
    echo 
    '0% {
        text-shadow: 0 0 30px #fff
    }';
    for($num=1;$num<100;$num++)
    echo '

    '.$num.'% {
        text-shadow: 0 0 30px rgb('.mt_rand(0,255).', '.mt_rand(0,255).', '.mt_rand(0,255).')
    }';
echo '
    100% {
        text-shadow: 0 0 30px #fff
    }';
}