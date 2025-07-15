<style>
    p { margin: 2px 0; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #aaa; padding: 6px 10px; text-align: left; }
    th { background: #f0f0f0; }
</style>
<?php
require_once "vendor/autoload.php";

use Game\Battle;
use Game\Character;
use Game\CharacterStats;
use Game\Equipment;
use Game\Item;
use Game\Wallet;

$jainaStats = new CharacterStats(150, 20, 15);
$jaina = new Character("Jaina", "Warrior", $jainaStats);
$jainaEquipment = new Equipment(null, null);
$jainaWallet = new Wallet(100);
$jainaSword = new Item("Steel Sword", "Weapon", 30, 10, 0, 0, "None");

// First new character set (named arguments, default values)
$ariaStats = new CharacterStats(attack: 30, health: 110); // defense defaults to 5
$aria = new Character(role: "Archer", name: "Aria", stats: $ariaStats);
$ariaEquipment = new Equipment(equippedArmor: null, equippedWeapon: "Longbow");
$ariaWallet = new Wallet(); // gold defaults to 100
$ariaRing = new Item(type: "accessory", name: "Magic Ring", value: 250, attackBonus: 15); // bonuses default to 0

$thorgarStats = new CharacterStats(100, 30); // defense defaults to 5
$thorgar = new Character(role: "Mage", name: "Thorgar", stats: $thorgarStats); // named args, different order
$thorgarEquipment = new Equipment("Magic Staff", "Wizard Robe");
$thorgarWallet = new Wallet(180);
$thorgarPotion = new Item(name: "Mana Potion", type: "consumable", value: 40, healthBonus: 20);

$characters = [
    [
        'character' => $jaina,
        'stats' => $jainaStats,
        'equipment' => $jainaEquipment,
        'wallet' => $jainaWallet,
        'item' => $jainaSword
    ],
    [
        'character' => $aria,
        'stats' => $ariaStats,
        'equipment' => $ariaEquipment,
        'wallet' => $ariaWallet,
        'item' => $ariaRing
    ],
    [
        'character' => $thorgar,
        'stats' => $thorgarStats,
        'equipment' => $thorgarEquipment,
        'wallet' => $thorgarWallet,
        'item' => $thorgarPotion
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

foreach ($characters as $character) {
    $char = $character['character'];
    $stats = $character['stats'];
    $equip = $character['equipment'];
    $wallet = $character['wallet'];
    $item = $character['item'];
    echo "<tr>";
    echo "<td>" . $char->getName() . "</td>";
    echo "<td>" . $char->getRole() . "</td>";
    echo "<td>" . $stats->getHealth() . "</td>";
    echo "<td>" . $stats->getAttack() . "</td>";
    echo "<td>" . $stats->getDefense() . "</td>";
    echo "<td>" . $equip->getEquippedWeapon() . "</td>";
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

echo "<p>Summary = " . $aria->getSummary() . "</p>";
// Test Battle functionality
$battle = new Battle();
echo $battle->startFight($aria, $thorgar);

//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);