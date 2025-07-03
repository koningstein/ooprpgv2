<?php

class Equipment
{
    public $equippedWeapon;
    public $equippedArmor;

    public function displayEquipment()
    {
        $weapon = $this->equippedWeapon ? $this->equippedWeapon->toString() : 'None';
        $armor = $this->equippedArmor ? $this->equippedArmor->toString() : 'None';
        echo "Equipped Weapon: {$weapon}\nEquipped Armor: {$armor}\n";
    }
}