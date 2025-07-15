<?php

class CharacterStats
{
    public $health;
    public $attack;
    public $defense;

    public function __construct($health, $attack, $defense)
    {
        $this->health = $health;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    public function displayStats()
    {
        return "Health: {$this->health}\nAttack: {$this->attack}\nDefense: {$this->defense}\n";
    }

    public function setHealth($health)
    {
        if ($health < 0) {
            return "Error: Health cannot be negative.";
        }
        $this->health = $health;
        return "Health set successfully.";
    }

    public function setAttack($attack)
    {
        if ($attack <= 0) {
            return "Error: Attack must be greater than 0.";
        }
        $this->attack = $attack;
        return "Attack set successfully.";
    }

    public function setDefense($defense)
    {
        if ($defense <= 0) {
            return "Error: Defense must be greater than 0.";
        }
        $this->defense = $defense;
        return "Defense set successfully.";
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getDefense()
    {
        return $this->defense;
    }
}