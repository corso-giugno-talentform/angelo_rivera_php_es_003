<?php

function checknum($max)
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            echo $i . ', ';
        }
    }

    echo "\n";

    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 !== 0) {
            echo $i . ', ';
        }
    }
}

checknum(10);
