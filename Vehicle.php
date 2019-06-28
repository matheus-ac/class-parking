<?php

class Vehicle
{
    public $hourIn;
    public $hourOut;
    public $plateVehicle;
    public $priceTotal;
    public $hourTotal;

    public function getHourIn(){
        return $this->hourIn;
    }

    public function getHourOut(){
        return $this->hourOut;
    }

    public function getPlateVehicle(){
        return $this->plateVehicle;
    }

    public function getPriceTotal(){
        return $this->priceTotal;
    }

    public function getHourTotal(){
        return $this->hourTotal;
    }

    public function setHourIn($hourIn){
        $this->hourIn = $hourIn;
    }

    public function setHourOut($hourOut){
        $this->hourOut = $hourOut;
    }
    public function setPlateVehicle($plateVehicle){
        $this->plateVehicle = $plateVehicle;
    }

    public function setPriceTotal($priceTotal){
        $this->priceTotal = $priceTotal;
    }

    public function setHourTotal($hourTotal){
        $this->hourTotal = $hourTotal;
    }
}