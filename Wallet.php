<?php

class Wallet
{
    public $gold;

    public function __construct($gold = 100)
    {
        $this->gold = $gold;
    }

    public function displayGold()
    {
        echo "Gold: {$this->gold}\n";
    }

    public function setGold($newGold)
    {
        if ($newGold < 0) {
            return "Error: Gold cannot be negative.";
        }
        $this->gold = $newGold;
        return "Gold set successfully.";
    }

    public function getGold()
    {
        return $this->gold;
    }
}