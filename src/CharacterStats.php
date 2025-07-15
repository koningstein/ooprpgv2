<?php

namespace Game;
/**
 * Manages the health, attack, and defense stats of a character.
 */
class CharacterStats
{
    /**
     * Creates a new stats object with health, attack, and optional defense.
     */
    public function __construct(
        public $health,
        public $attack,
        public $defense = 5
    ) {}

    /**
     * Displays all stats as a string.
     */
    public function displayStats()
    {
        return "Health: {$this->health}\nAttack: {$this->attack}\nDefense: {$this->defense}\n";
    }

    /**
     * Sets the health stat to a new value.
     */
    public function setHealth($health)
    {
        if ($health < 0) {
            return "Error: Health cannot be negative.";
        }
        $this->health = $health;
        return "Health set successfully.";
    }

    /**
     * Sets the attack stat to a new value.
     */
    public function setAttack($attack)
    {
        if ($attack <= 0) {
            return "Error: Attack must be greater than 0.";
        }
        $this->attack = $attack;
        return "Attack set successfully.";
    }

    /**
     * Sets the defense stat to a new value.
     */
    public function setDefense($defense)
    {
        if ($defense <= 0) {
            return "Error: Defense must be greater than 0.";
        }
        $this->defense = $defense;
        return "Defense set successfully.";
    }

    /**
     * Returns the current health stat.
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Returns the current attack stat.
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Returns the current defense stat.
     */
    public function getDefense()
    {
        return $this->defense;
    }
}