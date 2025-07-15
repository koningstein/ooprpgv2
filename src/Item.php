<?php

namespace Game;

/**
 * Represents an item with a name, type, value, and possible stat bonuses.
 * Can be an Weapon, Armor, Consumable or Miscelanious
 */
class Item
{
    /**
     * Creates a new item with name, type, value, and optional bonuses or effects.
     */
    public function __construct(
        public $name,
        public $type,
        public $value,
        public $attackBonus = 0,
        public $defenceBonus = 0,
        public $healthBonus = 0,
        public $specialEffect = ""
    ) {}

    /**
     * Displays the item as a string.
     */
    public function displayItem()
    {
        return $this->toString() . "\n";
    }

    /**
     * Returns a string with all item details.
     */
    public function toString()
    {
        return "Name: {$this->name} \nType: {$this->type} \nValue: {$this->value} \nAttack Bonus: {$this->attackBonus} \nDefence Bonus: {$this->defenceBonus} \nHealth Bonus: {$this->healthBonus} \nSpecial Effect: {$this->specialEffect}";
    }

    /**
     * Sets the item name.
     */
    public function setName($name)
    {
        if (empty($name)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $name;
        return "Name set successfully.";
    }

    /**
     * Sets the item value.
     */
    public function setValue($value)
    {
        if ($value < 0) {
            return "Error: Value cannot be negative.";
        }
        $this->value = $value;
        return "Value set successfully.";
    }

    /**
     * Sets the attack bonus for the item.
     */
    public function setAttackBonus($bonus)
    {
        if ($bonus < 0) {
            return "Error: Attack bonus cannot be negative.";
        }
        $this->attackBonus = $bonus;
        return "Attack bonus set successfully.";
    }

    /**
     * Sets the defense bonus for the item.
     */
    public function setDefenseBonus($bonus)
    {
        if ($bonus < 0) {
            return "Error: Defense bonus cannot be negative.";
        }
        $this->defenceBonus = $bonus;
        return "Defense bonus set successfully.";
    }

    /**
     * Returns the item name.
     */
    public function getName()
    {
        return ucfirst($this->name);
    }

    /**
     * Returns the item type.
     */
    public function getType()
    {
        return ucfirst($this->type);
    }

    /**
     * Returns the item value.
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the attack bonus of the item.
     */
    public function getAttackBonus()
    {
        return $this->attackBonus;
    }

    /**
     * Returns the defense bonus of the item.
     */
    public function getDefenseBonus()
    {
        return $this->defenceBonus;
    }

    /**
     * Returns the health bonus of the item.
     */
    public function getHealthBonus()
    {
        return $this->healthBonus;
    }

    /**
     * Returns the special effect of the item.
     */
    public function getSpecialEffect()
    {
        return !empty($this->specialEffect) ? $this->specialEffect : "No special effect";
    }
}