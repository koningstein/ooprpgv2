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
        return $this->toString() . "\n";
    }

    public function toString()
    {
        return "Name: {$this->name} \nType: {$this->type} \nValue: {$this->value} \nAttack Bonus: {$this->attackBonus} \nDefence Bonus: {$this->defenceBonus} \nHealth Bonus: {$this->healthBonus} \nSpecial Effect: {$this->specialEffect}";
    }

    public function setName($name)
    {
        if (empty($name)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $name;
        return "Name set successfully.";
    }

    public function setValue($value)
    {
        if ($value < 0) {
            return "Error: Value cannot be negative.";
        }
        $this->value = $value;
        return "Value set successfully.";
    }

    public function setAttackBonus($bonus)
    {
        if ($bonus < 0) {
            return "Error: Attack bonus cannot be negative.";
        }
        $this->attackBonus = $bonus;
        return "Attack bonus set successfully.";
    }

    public function setDefenseBonus($bonus)
    {
        if ($bonus < 0) {
            return "Error: Defense bonus cannot be negative.";
        }
        $this->defenceBonus = $bonus;
        return "Defense bonus set successfully.";
    }

    // --- Getters ---
    public function getName()
    {
        return ucfirst($this->name);
    }

    public function getType()
    {
        return ucfirst($this->type);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getAttackBonus()
    {
        return $this->attackBonus;
    }

    public function getDefenseBonus()
    {
        return $this->defenceBonus;
    }

    public function getHealthBonus()
    {
        return $this->healthBonus;
    }

    public function getSpecialEffect()
    {
        return !empty($this->specialEffect) ? $this->specialEffect : "No special effect";
    }
}