<?php

class User 
{
    public $fname;
    public $lname;
    public $age;
    public $city;

    public function __construct($fname,$lname,$age,$city) 
    {
        $this->fname=$fname;
        $this->lname=$lname;
        $this->age=$age;
        $this->city=$city;
    }

    public function __toString()
    {
        return "<p>User name is ".$this->fname. " and the last name is ".$this->lname. "</p>";
    }
    


}

