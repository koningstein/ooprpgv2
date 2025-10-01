<?php

namespace Game;

/**
 * Manages the inventory of a character, including items and their maximum slots.
 */
class Inventory
{
    private array $items = [];
    private int $maxSlots;

    /**
     * Initializes the inventory with a maximum number of slots.
     * @param int $maxSlots The maximum number of slots in the inventory.
     */
    public function __construct(int $maxSlots = 10)
    {
        $this->maxSlots = $maxSlots;
    }

    /**
     * Adds an item to the inventory if there is space.
     * @param Item $item
     * @return string Success message or error if inventory is full.
     */
    public function addItem(Item $item): string
    {
        if ($this->isFull()) {
            return "Inventory is full, cannot add item.";
        }
        $this->items[] = $item;
        return "Item '{$item->getName()}' added successfully.";
    }

    /**
     * Removes an item by name from the inventory.
     * @param string $itemName
     * @return string Success message or error if item not found.
     */
    public function removeItem(string $itemName): string
    {
        foreach ($this->items as $index => $item) {
            if (strtolower($item->getName()) === strtolower($itemName)) {
                unset($this->items[$index]);
                return "Item '{$itemName}' removed successfully.";
            }
        }
        return "Item not found in inventory.";
    }

    /**
     * Gets an item by name from the inventory.
     * @param string $itemName
     * @return Item|null The item if found, null otherwise.
     */
    public function getItem(string $itemName): ?Item
    {
        foreach ($this->items as $item) {
            if (strtolower($item->getName()) === strtolower($itemName)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * Returns all items in the inventory.
     * @return array Array of Item objects.
     */
    public function getAllItems(): array
    {
        return $this->items;
    }

    /**
     * Returns the number of items in the inventory.
     * @return int
     */
    public function getItemCount(): int
    {
        return count($this->items);
    }

    /**
     * Checks if the inventory is full.
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->getItemCount() >= $this->maxSlots;
    }

    /**
     * Checks if the inventory is empty.
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    /**
     * Returns the maximum number of slots in the inventory.
     * @return int
     */
    public function getMaxSlots(): int
    {
        return $this->maxSlots;
    }
}