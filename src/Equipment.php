<?php

namespace Game;

class Equipment
{
    public function __construct(
        public $equippedWeapon = null,
        public $equippedArmor = null
    ) {}

    public function displayEquipment()
    {
        $weapon = $this->equippedWeapon ? $this->equippedWeapon : 'None';
        $armor = $this->equippedArmor ? $this->equippedArmor : 'None';
        echo "Equipped Weapon: {$weapon}\nEquipped Armor: {$armor}\n";
    }

    public function setEquippedWeapon($weapon)
    {
        if (!is_string($weapon) && !is_null($weapon)) {
            return "Error: Weapon must be a string or null.";
        }
        $this->equippedWeapon = $weapon;
        return "Equipped weapon set successfully.";
    }

    public function setEquippedArmor($armor)
    {
        if (!is_string($armor) && !is_null($armor)) {
            return "Error: Armor must be a string or null.";
        }
        $this->equippedArmor = $armor;
        return "Equipped armor set successfully.";
    }

    public function getEquippedWeapon()
    {
        return $this->equippedWeapon !== null ? $this->equippedWeapon : "No weapon equipped";
    }

    public function getEquippedArmor()
    {
        return $this->equippedArmor !== null ? $this->equippedArmor : "No armor equipped";
    }
}