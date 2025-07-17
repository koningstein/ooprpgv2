<?php

namespace Game;
/**
 * Manages the equipped weapon and armor for a character.
 */
class Equipment
{
    public ?string $equippedWeapon = null;
    public ?string $equippedArmor = null;

    /**
     * Sets the weapon and armor for an equipment
     * @param string|null $weapon
     * @param string|null $armor
     * @return string
     */
    public function setEquipment($weapon, $armor): string
    {
        $messages = [];
        $messages[] = $this->setEquippedWeapon($weapon);
        $messages[] = $this->setEquippedArmor($armor);
        return implode(' ', $messages);
    }

    /**
     * Displays the weapon and armor in a string
     * @return string
     */
    public function displayEquipment(): string
    {
        $weapon = $this->equippedWeapon ? $this->equippedWeapon : 'None';
        $armor = $this->equippedArmor ? $this->equippedArmor : 'None';
        return "Equipped Weapon: {$weapon}\nEquipped Armor: {$armor}\n";
    }

    /**
     * Sets the equipped weapon.
     * @param string|null $weapon
     * @return string
     */
    public function setEquippedWeapon($weapon): string
    {
        if (!is_string($weapon) && !is_null($weapon)) {
            return "Error: Weapon must be a string or null.";
        }
        $this->equippedWeapon = $weapon;
        return "Equipped weapon set successfully.";
    }

    /**
     * Sets the equipped armor.
     * @param string|null $armor
     * @return string
     */
    public function setEquippedArmor($armor): string
    {
        if (!is_string($armor) && !is_null($armor)) {
            return "Error: Armor must be a string or null.";
        }
        $this->equippedArmor = $armor;
        return "Equipped armor set successfully.";
    }

    /**
     * Returns the currently equipped weapon.
     * @return string
     */
    public function getEquippedWeapon()
    {
        return $this->equippedWeapon !== null ? $this->equippedWeapon : "No weapon equipped";
    }

    /**
     * Returns the currently equipped armor.
     * @return string
     */
    public function getEquippedArmor()
    {
        return $this->equippedArmor !== null ? $this->equippedArmor : "No armor equipped";
    }
}