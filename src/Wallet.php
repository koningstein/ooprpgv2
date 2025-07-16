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
     */
    public function displayGold()
    {
       return "Gold: {$this->gold}\n";
    }

    /**
     * Sets the gold amount to a new value.
     */
    public function setGold($gold)
    {
        if ($gold < 0) {
            return "Error: Gold cannot be negative.";
        }
        $this->gold = $gold;
        return "Gold set successfully.";
    }

    /**
     * Returns the current gold amount.
     */
    public function getGold()
    {
        return $this->gold;
    }
}