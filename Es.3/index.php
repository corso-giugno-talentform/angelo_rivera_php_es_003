<?php

function checknumd($max)
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 !== 0) {
            echo $i . ', ';
        }
    }
}

function checknump($max)
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            echo $i . ', ';
        }
    }
}

function checknum($max)
{

    checknumd($max);
    echo "\n";
    checknump($max);
}

checknum(10);
