<?php

namespace Game;

class Item
{
    public function __construct(
        public $name,
        public $type,
        public $value,
        public $attackBonus = 0,
        public $defenceBonus = 0,
        public $healthBonus = 0,
        public $specialEffect = ""
    ) {}

    public function displayItem()
    {
        echo $this->toString() . "\n";
    }

    public function toString()
    {
        return "Name: {$this->name} \nType: {$this->type} \nValue: {$this->value} \nAttack Bonus: {$this->attackBonus} \nDefence Bonus: {$this->defenceBonus} \nHealth Bonus: {$this->healthBonus} \nSpecial Effect: {$this->specialEffect}";
    }

    public function setName($newName)
    {
        if (empty($newName)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $newName;
        return "Name set successfully.";
    }

    public function setValue($newValue)
    {
        if ($newValue < 0) {
            return "Error: Value cannot be negative.";
        }
        $this->value = $newValue;
        return "Value set successfully.";
    }

    public function setAttackBonus($newBonus)
    {
        if ($newBonus < 0) {
            return "Error: Attack bonus cannot be negative.";
        }
        $this->attackBonus = $newBonus;
        return "Attack bonus set successfully.";
    }

    public function setDefenseBonus($newBonus)
    {
        if ($newBonus < 0) {
            return "Error: Defense bonus cannot be negative.";
        }
        $this->defenceBonus = $newBonus;
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