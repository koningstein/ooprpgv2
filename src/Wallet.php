<?php

namespace Game;
/**
 * Manages the gold amount for a character.
 */
class Wallet
{
    public $gold = 100;

    /**
     * Displays the current gold amount as a string.
     * @return string
     */
    public function displayGold(): string
    {
       return "Gold: {$this->gold}\n";
    }

    /**
     * Sets the gold amount to a new value.
     * @param int $gold
     * @return string
     */
    public function setGold($gold): string
    {
        if ($gold < 0) {
            return "Error: Gold cannot be negative.";
        }
        $this->gold = $gold;
        return "Gold set successfully.";
    }

    /**
     * Returns the current gold amount.
     * @return int
     */
    public function getGold(): int
    {
        return $this->gold;
    }
}