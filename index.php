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
use Game\Inventory;

// Jaina
$jainaStats = new CharacterStats();
echo $jainaStats->setStats(150, 20, 15) . "<br>";
$jaina = new Character(12);
echo $jaina->setCharacter("Jaina", "Warrior", $jainaStats) . "<br>";
$jainaEquipment = new Equipment();
echo $jainaEquipment->setEquipment(null, null) . "<br>";
$jainaWallet = new Wallet();
echo $jainaWallet->setGold(100) . "<br>";
$jainaSword = new Item();
echo $jainaSword->setItem("Steel Sword", "Weapon", 30, 10, 0, 0, "None") . "<br>";
$jaina->getInventory()->addItem($jainaSword);
$jaina->equipWeapon($jaina->getInventory()->getItem("Steel Sword"));

// Aria
$ariaStats = new CharacterStats();
echo $ariaStats->setStats(110, 30, 5) . "<br>";
$aria = new Character(8);
echo $aria->setCharacter("Aria", "Archer", $ariaStats) . "<br>";
$ariaEquipment = new Equipment();
echo $ariaEquipment->setEquipment("Longbow", null) . "<br>";
$ariaWallet = new Wallet();
echo $ariaWallet->setGold(100) . "<br>";
$ariaRing = new Item();
echo $ariaRing->setItem("Magic Ring", "accessory", 250, 15) . "<br>";
$aria->getInventory()->addItem($ariaRing);

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
$thorgar->getInventory()->addItem($thorgarPotion);

$characters = [$jaina, $aria, $thorgar];

echo "<table>";
echo "<tr>
  <th>Name</th>
  <th>Role</th>
  <th>Health</th>
  <th>Attack</th>
  <th>Defense</th>
  <th>Equipment</th>
  <th>Inventory</th>
</tr>";

foreach ($characters as $char) {
    $stats = $char->getStats();
    $equip = $char->getEquipment();
    $inventory = $char->getInventory();

    // Inventory items as list
    $itemList = "<ul>";
    foreach ($inventory->getAllItems() as $item) {
        $itemList .= "<li>{$item->getName()} ({$item->getType()}, Value: {$item->getValue()})</li>";
    }
    $itemList .= "</ul>";

    // Equipment as list
    $equipmentList = "<ul>";
    $equipmentList .= "<li>Weapon: " . $equip->getEquippedWeapon() . "</li>";
    $equipmentList .= "<li>Armor: " . $equip->getEquippedArmor() . "</li>";
    $equipmentList .= "</ul>";

    echo "<tr>";
    echo "<td>" . $char->getName() . "</td>";
    echo "<td>" . $char->getRole() . "</td>";
    echo "<td>" . $stats->getHealth() . "</td>";
    echo "<td>" . $stats->getAttack() . "</td>";
    echo "<td>" . $stats->getDefense() . "</td>";
    echo "<td>" . $equipmentList . "</td>";
    echo "<td>" . $itemList . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<p>Summary = " . $aria->getSummary() . "</p>";

// Test takeDamage() on Aria
echo "<p>Jaina health before damage: " . $jaina->getStats()->getHealth() . "</p>";
$jaina->takeDamage(30);
echo "<p>Jaina health after taking 10 damage: " . $jaina->getStats()->getHealth() . "</p>";
$jaina->takeDamage(50);
echo "<p>Jaina health after taking 50 damage: " . $jaina->getStats()->getHealth() . "</p>";
$jaina->takeDamage(100);
echo "<p>Jaina health after taking 100 damage: " . $jaina->getStats()->getHealth() . "</p>";


// Start first fight
$battle1 = new Battle();
$result1 = $battle1->startFight($aria, $thorgar);
echo "<h3>First Battle Result</h3>";
echo $result1;

// Reset health of both characters
$aria->getStats()->resetHealth();
$thorgar->getStats()->resetHealth();

// Start second fight
$battle2 = new Battle();
$result2 = $battle2->startFight($aria, $thorgar);
echo "<h3>Second Battle Result</h3>";
echo $result2;

//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);