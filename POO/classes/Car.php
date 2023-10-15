<?php

class Car
{
    private int $id;
    private string $name;
    private string $engine;
    private int $year;
    private int $km;
    private string $img;


    public function __construct($id, $name, $engine, $year, $km, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->engine =$engine;
        $this->year = $year;
        $this->km = $km;
        $this->img = $img;

    }
    public function getId(): int { return $this->id; }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }
    public function setEngine(string $engine): self
    {
        $this->engine = $engine;
        return $this;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function getKm(): int
    {
        return $this->km;
    }
    public function setKm(int $km): self
    {
        $this->km = $km;
        return $this;
    }

    public function getImg(): string { return $this->img; }
    public function setImg(string $img): self { $this->img = $img; return $this; }



}
