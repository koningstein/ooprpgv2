<?php

class CharacterStats
{
    public $health;
    public $attack;
    public $defense;

    public function displayStats()
    {
        return "Health: {$this->health}\nAttack: {$this->attack}\nDefense: {$this->defense}\n";
    }
}