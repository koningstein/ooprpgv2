<?php

class CharacterStats
{
    public $health;
    public $attack;
    public $defense;

    public function displayStats()
    {
        echo "Health: {$this->health}\nAttack: {$this->attack}\nDefense: {$this->defense}\n";
    }
}