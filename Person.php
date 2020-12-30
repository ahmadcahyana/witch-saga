<?php

class Person {
    public $born;
    public $year_of_death;

    public function setPerson($born, $year_of_death){
        $this->setBorn($born);
        $this->setYearOfDeath($year_of_death);
    }

    public function getPerson(){
        return $this->born;
    }

    public function getBorn()
    {
        return $this->born;
    }

    public function setBorn($born)
    {
        $this->born = $born;
    }

    public function getYearOfDeath()
    {
        return $this->year_of_death;
    }

    public function setYearOfDeath($year_of_death)
    {
        $this->year_of_death = $year_of_death;
    }
}