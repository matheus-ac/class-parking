<?php

require_once("Vehicle.php");


class Parking extends Vehicle
{
    private $pricePerHour;
    private $allVacancies;
    public $vehicles;

    public function __construct($price = null,$allVacancies = null)
    {
        $this->setPrice($price);
        $this->setAllVacancies($allVacancies);
    }

    function  getPrice(){
        return $this->pricePerHour;
    }

    function getAllVacancies(){
        return $this->allVacancies;
    }

    function getVehicles(){
        return $this->vehicles;
    }

    private function setPrice($price){
        $this->pricePerHour = $price;
    }

    private function setAllVacancies($all){
        $this->allVacancies = $all;
    }

    function CheckIn($plateVehicle, $hourIn){
        $this->allVacancies = $this->allVacancies -1;

        $this->vehicles[] = [
            'plateVehicle' =>$plateVehicle,
            'hourIn' => $hourIn
        ];

        $this->setPlateVehicle($plateVehicle);
        $this->setHourIn($hourIn);
    }

    function CheckOut($plateVehicle, $hourOut){

            $id = $this->SearchVehicle($plateVehicle);

            $HourIn = $this->vehicles[$id ]['hourIn'];
            $vehicle = $this->vehicles[$id];
            $this->setPriceTotal($this->calcPrice($HourIn, $hourOut));

            unset($this->vehicles[$id]);
            $this->allVacancies = $this->allVacancies +1;

            return $vehicle;

    }

    function SearchVehicle($plateVehicle){
        return array_search($plateVehicle, $this->vehicles);
    }

    function calcPrice($hourIn, $hourOut){
        $hourtotal = strtotime($hourOut) - strtotime($hourIn);
        $hourtotal = ceil($hourtotal/ 3600);
        $this->setHourTotal($hourtotal);
        $price = $this->pricePerHour * $hourtotal;

        return $price;
    }

}