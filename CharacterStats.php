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

    public function setHealth($newHealth)
    {
        if ($newHealth < 0) {
            return "Error: Health cannot be negative.";
        }
        $this->health = $newHealth;
        return "Health set successfully.";
    }

    public function setAttack($newAttack)
    {
        if ($newAttack <= 0) {
            return "Error: Attack must be greater than 0.";
        }
        $this->attack = $newAttack;
        return "Attack set successfully.";
    }

    public function setDefense($newDefense)
    {
        if ($newDefense <= 0) {
            return "Error: Defense must be greater than 0.";
        }
        $this->defense = $newDefense;
        return "Defense set successfully.";
    }
}