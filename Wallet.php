<?php

class Wallet
{
    public function __construct(
        public $gold = 100
    ) {}

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