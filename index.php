<style>
    p { margin: 2px 0; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #aaa; padding: 6px 10px; text-align: left; }
    th { background: #f0f0f0; }
</style>
<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

// Existing hero
$hero = new Character("Jaina", "Mage");
$heroStats = new CharacterStats(120, 35, 10);
$heroEquipment = new Equipment("Magic Staff", "Mystic Robe");
$heroWallet = new Wallet(250);
$sword = new Item("Steel Sword", "Weapon", 30, 10, 0, 0, "None");

// First new character set (named arguments, default values)
$character1 = new Character(role: "Archer", name: "Aria");
$stats1 = new CharacterStats(attack: 15, health: 80); // defense defaults to 5
$equipment1 = new Equipment(equippedArmor: null, equippedWeapon: "Longbow");
$wallet1 = new Wallet(); // gold defaults to 100
$item1 = new Item(type: "accessory", name: "Magic Ring", value: 250); // bonuses default to 0

$character2 = new Character(role: "Warrior", name: "Bram"); // named args, different order
$stats2 = new CharacterStats(150, 20); // defense defaults to 5
$equipment2 = new Equipment("Battle Axe", "Chainmail");
$wallet2 = new Wallet(180);
$item2 = new Item(name: "Health Potion", type: "consumable", value: 50, healthBonus: 30);

$characters = [
    [
        'character' => $hero,
        'stats' => $heroStats,
        'equipment' => $heroEquipment,
        'wallet' => $heroWallet,
        'item' => $sword
    ],
    [
        'character' => $character1,
        'stats' => $stats1,
        'equipment' => $equipment1,
        'wallet' => $wallet1,
        'item' => $item1
    ],
    [
        'character' => $character2,
        'stats' => $stats2,
        'equipment' => $equipment2,
        'wallet' => $wallet2,
        'item' => $item2
    ]
];

echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Role</th>
        <th>Health</th>
        <th>Attack</th>
        <th>Defense</th>
        <th>Weapon</th>
        <th>Armor</th>
        <th>Gold</th>
        <th>Item Name</th>
        <th>Item Type</th>
        <th>Item Value</th>
        <th>Item Attack Bonus</th>
        <th>Item Defense Bonus</th>
        <th>Item Health Bonus</th>
        <th>Item Special Effect</th>
      </tr>";

foreach ($characters as $c) {
    $char = $c['character'];
    $stats = $c['stats'];
    $equip = $c['equipment'];
    $wallet = $c['wallet'];
    $item = $c['item'];
    echo "<tr>";
    echo "<td>" . $char->getName() . "</td>";
    echo "<td>" . $char->getRole() . "</td>";
    echo "<td>" . $stats->getHealth() . "</td>";
    echo "<td>" . $stats->getAttack() . "</td>";
    echo "<td>" . $stats->getDefense() . "</td>";
    echo "<td>" . (is_object($equip->getEquippedWeapon()) ? $equip->getEquippedWeapon()->getName() : $equip->getEquippedWeapon()) . "</td>";
    echo "<td>" . $equip->getEquippedArmor() . "</td>";
    echo "<td>" . $wallet->getGold() . "</td>";
    echo "<td>" . $item->getName() . "</td>";
    echo "<td>" . $item->getType() . "</td>";
    echo "<td>" . $item->getValue() . "</td>";
    echo "<td>" . $item->getAttackBonus() . "</td>";
    echo "<td>" . $item->getDefenseBonus() . "</td>";
    echo "<td>" . $item->getHealthBonus() . "</td>";
    echo "<td>" . $item->getSpecialEffect() . "</td>";
    echo "</tr>";
}
echo "</table>";



//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);