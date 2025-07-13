<style>
    p { margin: 2px 0; }
</style>
<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";


$hero = new Character("Jaina", "Mage");
$heroStats = new CharacterStats(120, 35, 10);
$heroEquipment = new Equipment("Magic Staff", "Mystic Robe");
$heroWallet = new Wallet(250);
$sword = new Item("Steel Sword", "Weapon", 30, 10, 0, 0, "None");


echo "<pre>";
echo "<p>Character Info:</p>";
echo "<p>Name: " . $hero->getName() . "</p>";
echo "<p>Role: " . $hero->getRole() . "</p>";
echo "<br>";
echo "<br><p>Character Stats:</p>";
echo "<p>Health: " . $heroStats->getHealth() . "</p>";
echo "<p>Attack: " . $heroStats->getAttack() . "</p>";
echo "<p>Defense: " . $heroStats->getDefense() . "</p>";
echo "<br>";
echo "<p>Equipment:</p>";
echo "<p>Equipped Weapon: " . $heroEquipment->getEquippedWeapon() . "</p>";
echo "<p>Equipped Armor: " . $heroEquipment->getEquippedArmor() . "</p>";
echo "<br>";
echo "<p>Wallet:</p>";
echo "<p>Gold: " . $heroWallet->getGold() . "</p>";
echo "<br>";
echo "<p>Item Info:</p>";
echo "<p>Name: " . $sword->getName() . "</p>";
echo "<p>Type: " . $sword->getType() . "</p>";
echo "<p>Value: " . $sword->getValue() . "</p>";
echo "<p>Attack Bonus: " . $sword->getAttackBonus() . "</p>";
echo "<p>Defense Bonus: " . $sword->getDefenseBonus() . "</p>";
echo "<p>Health Bonus: " . $sword->getHealthBonus() . "</p>";
echo "<p>Special Effect: " . $sword->getSpecialEffect() . "</p>";

//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);