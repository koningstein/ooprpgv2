<?php

namespace Game;
/**
 * Manages the health, attack, and defense stats of a character.
 */
class CharacterStats
{
    public $health;
    public $attack;
    public $defense;

    public function setStats($health, $attack, $defense)
    {
        $messages = [];
        $messages[] = $this->setHealth($health);
        $messages[] = $this->setAttack($attack);
        $messages[] = $this->setDefense($defense);
        return implode(' ', $messages);
    }

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