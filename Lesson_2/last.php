<?php

class House
{
    public $color;
    public $floors;

    public function __construct($color, $floors){
        $this->color = $color;
        $this->floors = $floors;
    }
    public function story(){
        echo "Мой дом {$this->color} c {$this->floors} этажами!";
    }
}

$myHouse = new House('красный', 2);
$myHouse->story();


