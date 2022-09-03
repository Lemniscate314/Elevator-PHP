<?php

class Elevator implements IElevator
{
    public $listOfFloors = array();
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
        $this->delay(5);

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
        echo $this->currentFlorr++ + "F | Going up ...";

    }
    function goDown()
    {
        echo $this->currentFloorr++ + "F | Going down ...";
    }

    function askPassenger()
    {
        $this->isDoorOpen = false;
        echo "Elevator opening ...";
        delay(1.3);
        $this->isDoorOpen = true;
        echo $this->currentFloor + "F | How many passengers:";
        $this->numOfPass = readline();
        if( $this->numOfPass < $this->minP || $this->numOfPass > $this->maxP)
        {
            echo "Error. valid number of passengers [1-20]";
            $this->askPassenger();
        }
        else
        {
            for($a = 0; $a < $this->numOfPass; $a ++)
            {
                $floor = selectFloor(a);
                if(in_array($floor,$this->listtOfFloors))
                {
                    $this->listtOfFloors[] = $floor;

                }
            }
        }
        echo "Elevator closing ...";
        delay(1.5);
        $this->isDoorOpen = false;
        initialize_eleavtor();


    }

    function selectFloor($id)
    {
        $isValidEntry = false;
        $floor = 0;
        while(!$isValidEntry)
        {
            echo "Passenger #"+ ($id+1) + " enter your floor: ";
            $floor = readline();
            if($floor < $this->minF || $floor > $this->maxF)
            {
                echo "Error. You have entered out of range floor. Valid [1-20]";

            }
            elseif ($floor = $this->currentFloor)
            {
                echo "You are already in the " + $this->currentFloor + "F.";
            }
            else
            {
                $this->destinations_lists[$floor--]++;
                $isValidEntry = true;
            }


        }
        return $floor;
    }


    function findShortest()
    {
        $shortest = abs($this->currentFloor - $this->listtOfFloors[0]);
        $id = 0;
        for( $a = 1; $a < $this->listOfFloors.count();$a ++)
        {
            if($shortest > abs($this->currentFloor - $this->listtOfFloors[$a]))
            {
                $shortest = abs($this->currentFloor - $this->listtOfFloors[$a]);
                $id = a;
            }
        }
        $shortest = $this->listtOfFloors[$id];
        return $shortest;
    }

    function initialize_elevator()
    {
        for($a = 0; $a < $this->listOfFloors.count(); $a++)
        {
            $shortest = $this->findShortest();
            echo "Next destination: "+ $shortest+ "F Passenger amount (" +$this->destinations_lists[$shortest -1] + ")";
            $this->delay(1.5);
            while($this->currentFloor < $shortest) $this->goUp();
            while($this->currentFloor > $shortest) $this->goDown();
            while ($this->destination_lists[$shortest-1] > 0)
            {
                echo "Unloading passenger ("+ $this->destinations_lists[$shortest -1]-- + ") at "+ $this->currentFloor + "F";
                $this->delay(1.3);
            }



        }
        $this->askPassenger();
    }
}