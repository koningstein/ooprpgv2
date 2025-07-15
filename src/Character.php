<?php

namespace Game;

/**
 * Class Character
 * Represents a game character with a name, role, and stats.
 */
class Character
{
    /**
     * Creates a new character with a name, role, and stats.
     */
    public function __construct(
        public $name,
        public $role,
        public $stats
    ) {}

    /**
     * Returns a string with the character's name and role.
     */
    public function displayInfo()
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }

    /**
     * Sets the character's name.
    */
    public function setName($name)
    {
        if (empty($newName)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $newName;
        return "Name set successfully.";
    }

    /**
     * Sets the character's role.
     */
    public function setRole($role)
    {
        if (empty($newRole)) {
            return "Error: Role cannot be empty.";
        }
        $this->role = $newRole;
        return "Role set successfully.";
    }

    /**
     * Gets the character's name.
     */
    public function getName()
    {
        return ucfirst($this->name);
    }

    /**
     * Gets the character's role.
     */
    public function getRole()
    {
        return ucfirst($this->role);
    }

    /**
     * Gets the character's stats object.
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Returns a short summary of the character (name, role, health).
     */
    public function getSummary()
    {
        return "{$this->getName()} ({$this->getRole()}), Health: {$this->getStats()->getHealth()}";
    }
}