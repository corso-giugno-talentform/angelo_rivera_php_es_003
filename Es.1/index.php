<?php

function checkm3($intero)
{
    if ($intero % 3 === 0 && $intero % 5 !== 0) {
        echo 'PHP' . "\n\n";
        return true;
    }
    return false;
}

function checkm5($intero)
{
    if ($intero % 5 === 0 && $intero % 3 !== 0) {
        echo 'JAVASCRIPT' . "\n\n";
        return true;
    }
    return false;
}

function checkm15($intero)
{
    if ($intero % 3 === 0 && $intero % 5 === 0) {
        echo 'TalentForm' . "\n\n";
        return true;
    }
    return false;
}

for ($i = 1; $i <= 30; $i++) {
    if (checkm15($i)) {
    } elseif (checkm3($i)) {
    } elseif (checkm5($i)) {
    } else {
        echo 'Numero => ' . $i . "\n\n";
    }
}
