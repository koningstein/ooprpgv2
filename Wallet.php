<?php

class Wallet
{
    public $gold;

    public function displayGold()
    {
        return "Gold: {$this->gold}\n";
    }
}