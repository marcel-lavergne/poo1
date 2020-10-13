<?php
class Car{
    private $nbWheels = 4;
    private $currentSpeed =0;
    private $color;
    private $nbSeats ;
    private $energy ;
    private $energyLevel = 100;


    public function getColor()
    {
        return $this->color;
    }


    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }


    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }


    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function __construct($color,$nbSeats,$energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function start(){
        $this->currentSpeed += 50;
    }
    public function movingForward(){

       if ($this->currentSpeed!== 0){
           $this->currentSpeed += 100;
       }
    }
    public function brake(){
        if ($this->currentSpeed <= 30){
            $this->currentSpeed = 0;
        }else{
            $this->currentSpeed -= 30;
        }


    }
    public function stop(){
        $this->currentSpeed = 0;
    }
}

