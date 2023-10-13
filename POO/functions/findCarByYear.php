<?php

function redirect(string $location)
{
    header('Location: ' . $location);
    exit;
}


function findCarByYear(array $cars, int $year): array
{
    $matchCar = [];
    foreach($cars as $car) {
        if($car->getYear() == $year) {
            $matchCar[]=$car;
        }
    }
    return $matchCar;
}
