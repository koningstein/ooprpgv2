<?php

class Item
{
    public $name;
    public $type;
    public $value;
    public $attackBonus;
    public $defenceBonus;
    public $healthBonus;
    public $specialEffect;

    public function displayItem()
    {
        echo $this->toString() . "\n";
    }

    public function toString()
    {
        return "Name: {$this->name} \nType: {$this->type} \nValue: {$this->value} \nAttack Bonus: {$this->attackBonus} \nDefence Bonus: {$this->defenceBonus} \nHealth Bonus: {$this->healthBonus} \nSpecial Effect: {$this->specialEffect}";
    }
}