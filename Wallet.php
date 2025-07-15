<?php

class Wallet
{
    public $gold;

    public function displayGold()
    {
       return "Gold: {$this->gold}\n";
    }

    public function setGold($gold)
    {
        if ($gold < 0) {
            return "Error: Gold cannot be negative.";
        }
        $this->gold = $gold;
        return "Gold set successfully.";
    }

    public function getGold()
    {
        return $this->gold;
    }
}