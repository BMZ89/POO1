<?php

class Car
{
    public $mark;
    public $price;
    public $max_speed;
    

    public function __construct($mark,$price,$max_speed) 
    {
        $this->mark=$mark;
        $this->price=$price;
        $this->max_speed=$max_speed;
        
    }

    public function __toString()
    {
        return "<p>First car is ".$this->mark. " and the the price is ".$this->price. "</p>";
    }
    


}
