<?php

class CarsFn
{
    private ?int $yearSearch = null;

    public function __construct(private array $cars)
    {
        if(isset($_GET['year'])) {
            $this->yearSearch = intval($_GET['year']);
        }
    }


    public function findByYear(int $year): array
    {
        $matchCar = [];
        foreach($this->cars as $car) {
            if($car->getYear() == $year) {
                $matchCar[]=$car;
            }
        }
        return $matchCar;
    }
}
