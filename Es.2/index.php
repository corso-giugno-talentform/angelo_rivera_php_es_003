<?php
const MAX_USA = 16;
const MAX_JAP = 30;

echo "Stampo per italia \n";
checkMax();
echo "----- \n";
echo "Stampo per USA \n";
checkMax(MAX_USA);
echo "----- \n";
echo "Stampo per JAP \n";
checkMax(MAX_JAP);

function greatherTen($intero, $max)
{
    if ($intero >= $max) {
        return true;
    }
    return false;
}


function checkMax($intero = 18)
{
    $persons = [
        [
            'name' => 'Marco',
            'age' => 18,
        ],
        [
            'name' => 'Vanessa',
            'age' => 12,
        ],
        [
            'name' => 'Jack',
            'age' => 34,
        ],
        [
            'name' => 'Maria',
            'age' => 55,
        ],
    ];
    foreach ($persons as $person) {
        if (greatherTen($person['age'], $intero)) {
            echo $person['name'] . ' può votare' . "\n";
        } else {
            echo $person['name'] . ' non può votare' . "\n";
        }
    }
}
