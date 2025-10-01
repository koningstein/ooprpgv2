<?php

namespace Game;

/**
 * Class CharacterList
 * Stores and manages a list of Character objects.
 */
class CharacterList
{
    private array $characters = [];

    /**
     * Adds a Character to the list.
     *
     * @param Character $character
     * @return string Confirmation message
     */
    public function addCharacter(Character $character): string
    {
        $this->characters[] = $character;
        return "Character {$character->getName()} added to list";
    }

    /**
     * Returns all Character objects in the list.
     *
     * @return Character[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }
}