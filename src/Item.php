<?php

namespace Game;

/**
 * Represents an item with a name, type, value, and possible stat bonuses.
 * Can be an Weapon, Armor, Consumable or Miscelanious
 */
class Item
{
    private string $name;
    private string $type;
    private int $value;
    private int $attackBonus = 0;
    private int $defenceBonus = 0;
    private int $healthBonus = 0;
    private string $specialEffect = "";

    /**
     * Sets the name, type, value and bonusses for an Item
     * @param string $name
     * @param string $type
     * @param int $value
     * @param int $attackBonus
     * @param int $defenseBonus
     * @param int $healthBonus
     * @param string $specialEffect
     * @return string
     */
    public function setItem($name, $type, $value, $attackBonus = 0, $defenseBonus = 0, $healthBonus = 0, $specialEffect = ""): string
    {
        $messages = [];
        $messages[] = $this->setName($name);
        $this->type = $type;
        $messages[] = $this->setValue($value);
        $messages[] = $this->setAttackBonus($attackBonus);
        $messages[] = $this->setDefenseBonus($defenseBonus);
        $this->healthBonus = $healthBonus;
        $this->specialEffect = $specialEffect;
        return implode(' ', $messages);
    }

    /**
     * creates a string from the object
     * @return string
     */
    public function displayItem(): string
    {
        return $this->toString() . "\n";
    }

    /**
     * Returns a string with all item details.
     * @return string
     */
    public function toString(): string
    {
        return "Name: {$this->name} \nType: {$this->type} \nValue: {$this->value} \nAttack Bonus: {$this->attackBonus} \nDefence Bonus: {$this->defenceBonus} \nHealth Bonus: {$this->healthBonus} \nSpecial Effect: {$this->specialEffect}";
    }

    /**
     * Sets the item name.
     * @param string $name
     * @return string
     */
    public function setName($name): string
    {
        if (empty($name)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $name;
        return "Name set successfully.";
    }

    /**
     * Sets the item value.
     * @param int $value
     * @return string
     */
    public function setValue($value): string
    {
        if ($value < 0) {
            return "Error: Value cannot be negative.";
        }
        $this->value = $value;
        return "Value set successfully.";
    }

    /**
     * Sets the attack bonus for the item.
     * @param int $bonus
     * @return string
     */
    public function setAttackBonus($bonus): string
    {
        if ($bonus < 0) {
            return "Error: Attack bonus cannot be negative.";
        }
        $this->attackBonus = $bonus;
        return "Attack bonus set successfully.";
    }

    /**
     * Sets the defense bonus for the item.
     * @param int $bonus
     * @return string
     */
    public function setDefenseBonus($bonus): string
    {
        if ($bonus < 0) {
            return "Error: Defense bonus cannot be negative.";
        }
        $this->defenceBonus = $bonus;
        return "Defense bonus set successfully.";
    }

    /**
     * Returns the item name.
     * @return string
     */
    public function getName(): string
    {
        return ucfirst($this->name);
    }

    /**
     * Returns the item type.
     * @return string
     */
    public function getType(): string
    {
        return ucfirst($this->type);
    }

    /**
     * Returns the item value.
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Returns the attack bonus of the item.
     * @return int
     */
    public function getAttackBonus(): int
    {
        return $this->attackBonus;
    }

    /**
     * Returns the defense bonus of the item.
     * @return int
     */
    public function getDefenseBonus()
    {
        return $this->defenceBonus;
    }

    /**
     * Returns the health bonus of the item.
     * @return int
     */
    public function getHealthBonus(): int
    {
        return $this->healthBonus;
    }

    /**
     * Returns the special effect of the item.
     * @return string
     */
    public function getSpecialEffect(): string
    {
        return !empty($this->specialEffect) ? $this->specialEffect : "No special effect";
    }
}