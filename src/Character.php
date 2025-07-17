<?php

namespace Game;

/**
 * Class Character
 * Represents a game character with a name, role, and stats.
 */
class Character
{
    public string $name;
    public string $role;
    public CharacterStats $stats;
    public Inventory $inventory;
    public Equipment $equipment;

    /**
     * Character constructor initializes inventory and equipment.
     */
    public function __construct(int $maxInventorySlots = 10)
    {
        $this->inventory = new Inventory($maxInventorySlots);
        $this->equipment = new Equipment();
    }

    /**
     * Create a character with name, role and statistics
     * @param string $name
     * @param string $role
     * @param CharacterStats $stats
     * @return string
     */
    public function setCharacter(string $name, string $role, CharacterStats $stats): string
    {
        $messages = [];
        $messages[] = $this->setName($name);
        $messages[] = $this->setRole($role);
        $this->stats = $stats;
        return implode(' ', $messages);
    }

    /**
     * displays the name and role of a character in a string
     * @return string
     */
    public function displayInfo(): string
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }

    /**
     * Sets the character's name.
     * @param string $name
     * @return string
    */
    public function setName(string $name): string
    {
        if (empty($name)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $name;
        return "Name set successfully.";
    }

    /**
     * Sets the character's role.
     * @param string $role
     * @return string
     */
    public function setRole(string $role): string
    {
        if (empty($role)) {
            return "Error: Role cannot be empty.";
        }
        $this->role = $role;
        return "Role set successfully.";
    }

    /**
     * Gets the character's name.
     * @return string
     */
    public function getName(): string
    {
        return ucfirst($this->name);
    }

    /**
     * Gets the character's role.
     * @return string
     */
    public function getRole(): string
    {
        return ucfirst($this->role);
    }

    /**
     * Gets the character's stats object.
     * @return CharacterStats
     */
    public function getStats(): CharacterStats
    {
        return $this->stats;
    }

    /**
     * Returns a short summary of the character (name, role, health).
     * @return string
     */
    public function getSummary(): string
    {
        return "{$this->getName()} ({$this->getRole()}), Health: {$this->getStats()->getHealth()}";
    }

    /**
     * Reduces the character's health by the given amount, not below 0.
     * @param int $amount
     * @return void
     */
    public function takeDamage(int $amount): void
    {
        $currentHealth = $this->stats->getHealth();
        $newHealth = max(0, $currentHealth - $amount);
        $this->stats->setHealth($newHealth);
    }

    /**
     * Returns the Inventory object.
     * @return Inventory
     */
    public function getInventory(): Inventory
    {
        return $this->inventory;
    }

    /**
     * Returns the Equipment object.
     * @return Equipment
     */
    public function getEquipment(): Equipment
    {
        return $this->equipment;
    }

    /**
     * Equips a weapon if it is in inventory and of type 'weapon'.
     * @param Item $weapon
     * @return string
     */
    public function equipWeapon(Item $weapon): string
    {
        if (strtolower($weapon->getType()) !== "weapon") {
            return "Item is not a weapon.";
        }
        $itemInInventory = $this->inventory->getItem($weapon->getName());
        if (!$itemInInventory) {
            return "Item not found in inventory.";
        }
        $this->equipment->setEquippedWeapon($weapon->getName());
        return "Weapon '{$weapon->getName()}' equipped successfully.";
    }

    /**
     * Equips armor if it is in inventory and of type 'armor'.
     * @param Item $armor
     * @return string
     */
    public function equipArmor(Item $armor): string
    {
        if (strtolower($armor->getType()) !== "armor") {
            return "Item is not armor.";
        }
        $itemInInventory = $this->inventory->getItem($armor->getName());
        if (!$itemInInventory) {
            return "Item not found in inventory.";
        }
        $this->equipment->setEquippedArmor($armor->getName());
        return "Armor '{$armor->getName()}' equipped successfully.";
    }
}