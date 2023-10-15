<?php

function findCar(array $cars, string $searchRes): array
{
    $res = [];
    $searchRes = strtolower($searchRes);
    foreach($cars as $car) {
        $carName = strtolower($car->getName());
        $carEngine = strtolower($car->getEngine());

        if(str_contains($carName, $searchRes) || str_contains($carEngine, $searchRes)) {
            $res[] = $car;
        }
    }
    return $res;

}
