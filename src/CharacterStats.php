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

    /**
     * Create statistics for a Character with health, attack and defense
     * @param int $health
     * @param int $attack
     * @param int $defense
     * @return string
     */
    public function setStats(int $health, int $attack, int $defense): string
    {
        $messages = [];
        $messages[] = $this->setHealth($health);
        $messages[] = $this->setAttack($attack);
        $messages[] = $this->setDefense($defense);
        return implode(' ', $messages);
    }

    /**
     * Displays the health, attach and defense values
     * @return string
     */
    public function displayStats() :string
    {
        return "Health: {$this->health}\nAttack: {$this->attack}\nDefense: {$this->defense}\n";
    }

    /**
     * Sets the health stat to a new value.
     * @param int $health
     * @return string
    */
    public function setHealth($health): string
    {
        if ($health < 0) {
            return "Error: Health cannot be negative.";
        }
        $this->health = $health;
        return "Health set successfully.";
    }

    /**
     * Sets the attack stat to a new value.
     * @param int $attack
     * @return string
     */
    public function setAttack($attack): string
    {
        if ($attack <= 0) {
            return "Error: Attack must be greater than 0.";
        }
        $this->attack = $attack;
        return "Attack set successfully.";
    }

    /**
     * Sets the defense stat to a new value.
     * @param int $defense
     * @return string
     */
    public function setDefense($defense): string
    {
        if ($defense <= 0) {
            return "Error: Defense must be greater than 0.";
        }
        $this->defense = $defense;
        return "Defense set successfully.";
    }

    /**
     * Returns the current health stat.
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Returns the current attack stat.
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * Returns the current defense stat.
     * @return int
     */
    public function getDefense(): int
    {
        return $this->defense;
    }
}