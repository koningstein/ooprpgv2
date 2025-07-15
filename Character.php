<?php

class Character
{
    public $name;
    public $role;

    public function displayInfo()
    {
        return "Name: {$this->name}\nRole: {$this->role}\n";
    }

    public function setName($newName)
    {
        if (empty($newName)) {
            return "Error: Name cannot be empty.";
        }
        $this->name = $newName;
        return "Name set successfully.";
    }

    public function setRole($newRole)
    {
        if (empty($newRole)) {
            return "Error: Role cannot be empty.";
        }
        $this->role = $newRole;
        return "Role set successfully.";
    }
}