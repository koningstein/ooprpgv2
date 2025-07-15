<?php

class Wallet
{
    public $gold;

    public function displayGold()
    {
       return "Gold: {$this->gold}\n";
    }

    public function setGold($newGold)
    {
        if ($newGold < 0) {
            return "Error: Gold cannot be negative.";
        }
        $this->gold = $newGold;
        return "Gold set successfully.";
    }
}