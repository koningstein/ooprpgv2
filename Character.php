<?php

class Character
{
    public $name;
    public $role;

    public function displayInfo()
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }
}