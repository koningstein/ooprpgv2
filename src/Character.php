<?php

namespace Game;

class Character
{
    public function __construct(
        public $name,
        public $role,
        public $stats
    ) {}

    public function displayInfo()
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }

    public function setName($name)
    {
        if (empty($newName)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $newName;
        return "Name set successfully.";
    }

    public function setRole($role)
    {
        if (empty($newRole)) {
            return "Error: Role cannot be empty.";
        }
        $this->role = $newRole;
        return "Role set successfully.";
    }

    public function getName()
    {
        return ucfirst($this->name);
    }

    public function getRole()
    {
        return ucfirst($this->role);
    }

    public function getStats()
    {
        return $this->stats;
    }
}