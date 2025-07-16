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

// Jaina
$jainaStats = new CharacterStats();
echo $jainaStats->setStats(150, 20, 15) . "<br>";
$jaina = new Character();
echo $jaina->setCharacter("Jaina", "Warrior", $jainaStats) . "<br>";
$jainaEquipment = new Equipment();
echo $jainaEquipment->setEquipment(null, null) . "<br>";
$jainaWallet = new Wallet();
echo $jainaWallet->setGold(100) . "<br>";
$jainaSword = new Item();
echo $jainaSword->setItem("Steel Sword", "Weapon", 30, 10, 0, 0, "None") . "<br>";

// Aria
$ariaStats = new CharacterStats();
echo $ariaStats->setStats(110, 30, 5) . "<br>";
$aria = new Character();
echo $aria->setCharacter("Aria", "Archer", $ariaStats) . "<br>";
$ariaEquipment = new Equipment();
echo $ariaEquipment->setEquipment("Longbow", null) . "<br>";
$ariaWallet = new Wallet();
echo $ariaWallet->setGold(100) . "<br>";
$ariaRing = new Item();
echo $ariaRing->setItem("Magic Ring", "accessory", 250, 15) . "<br>";

// Thorgar
$thorgarStats = new CharacterStats();
echo $thorgarStats->setStats(100, 30, 5) . "<br>";
$thorgar = new Character();
echo $thorgar->setCharacter("Thorgar", "Mage", $thorgarStats) . "<br>";
$thorgarEquipment = new Equipment();
echo $thorgarEquipment->setEquipment("Magic Staff", "Wizard Robe") . "<br>";
$thorgarWallet = new Wallet();
echo $thorgarWallet->setGold(180) . "<br>";
$thorgarPotion = new Item();
echo $thorgarPotion->setItem("Mana Potion", "consumable", 40, 0, 0, 20) . "<br>";

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

// Test Battle functionality
$battle = new Battle();
echo $battle->startFight($aria, $thorgar);

//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);