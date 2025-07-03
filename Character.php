<?php

class Character
{
    public $name;
    public $role;

    public function displayInfo()
    {
        echo "Name: {$this->name}\nRole: {$this->role}\n";
    }
}