<?php

namespace Game;

class Character
{
    public $name;
    public $role;
    public $stats;

    public function setCharacter($name, $role, $stats): string
    {
        $messages = [];
        $messages[] = $this->setName($name);
        $messages[] = $this->setRole($role);
        $this->stats = $stats;
        return implode(' ', $messages);
    }

    public function displayInfo()
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }

    public function setName($name)
    {
        if (empty($name)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $name;
        return "Name set successfully.";
    }

    public function setRole($role)
    {
        if (empty($role)) {
            return "Error: Role cannot be empty.";
        }
        $this->role = $role;
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