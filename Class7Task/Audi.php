<?php

include "Car.php";
class Audi extends Car
{
    private $Color;
    private $Seats;

    public function __construct($Color,$Seats)
    {
        $this->Color=$Color;
        $this->Seats=$Seats;
    }
    public function GetColor(){return $this->Color;}
    public function GetSeats(){return $this->Seats;}
}