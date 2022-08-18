<?php

class Elevator implements IElevator
{
    public $listtOfFloors = array();
    public $isDoorOpen = true;
    public $maxP = 20; /** max passenger*/
    public $maxF = 20; /** max floors   */
    public $minP = 1; /** min passengers */
    public $minF = 1; /** min floors */
    private $currentFloor = 1;
    private $destinationFloor = 0;
    public $input;
    public $destinations_lists =array();
    private $passFloor = 0; /** Passenger floor, we will use this variable for asking passenger's floor */
    private $numOfPass = 0;/** number of passengers */
    public function __construct()
    {
        $this->currentFloor = 0;
    }
    function startSimulations()
    {
        echo "\nWelcome to Elevator";
        echo "\nPlease enjoy";
        delay(5);

    }


    function delay($ms)
    {
            sleep($ms);

    }

    function display($obj)
    {
        echo $obj;

    }


    function goUp()
    {
        echo $this->currentFlorr ++ + "F | Going up ...";

    }
    function goDown()
    {
        echo $this->currentFlorr ++ + "F | Going down ...";
    }

    function askPassenger()
    {
        // TODO: Implement askPassenger() method.
    }

    function selectFloor($id)
    {
        // TODO: Implement selectFloor() method.
    }
}