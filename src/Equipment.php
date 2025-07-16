<?php

namespace Game;
/**
 * Manages the equipped weapon and armor for a character.
 */
class Equipment
{
    public $equippedWeapon = null;
    public $equippedArmor = null;

    /**
     * Sets the weapon and armor for an equipment
     */
    public function setEquipment($weapon, $armor)
    {
        $messages = [];
        $messages[] = $this->setEquippedWeapon($weapon);
        $messages[] = $this->setEquippedArmor($armor);
        return implode(' ', $messages);
    }

    /**
     * Displays the weapon and armor in a string
     */
    public function displayEquipment()
    {
        $weapon = $this->equippedWeapon ? $this->equippedWeapon : 'None';
        $armor = $this->equippedArmor ? $this->equippedArmor : 'None';
        return "Equipped Weapon: {$weapon}\nEquipped Armor: {$armor}\n";
    }

    /**
     * Sets the equipped weapon.
     */
    public function setEquippedWeapon($weapon)
    {
        if (!is_string($weapon) && !is_null($weapon)) {
            return "Error: Weapon must be a string or null.";
        }
        $this->equippedWeapon = $weapon;
        return "Equipped weapon set successfully.";
    }

    /**
     * Sets the equipped armor.
     */
    public function setEquippedArmor($armor)
    {
        if (!is_string($armor) && !is_null($armor)) {
            return "Error: Armor must be a string or null.";
        }
        $this->equippedArmor = $armor;
        return "Equipped armor set successfully.";
    }

    /**
     * Returns the currently equipped weapon.
     */
    public function getEquippedWeapon()
    {
        return $this->equippedWeapon !== null ? $this->equippedWeapon : "No weapon equipped";
    }

    /**
     * Returns the currently equipped armor.
     */
    public function getEquippedArmor()
    {
        return $this->equippedArmor !== null ? $this->equippedArmor : "No armor equipped";
    }
}