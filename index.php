<style>
    p { margin: 2px 0; }
</style>
<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";


$jaina = new Character("Jaina", "Warrior");
$jainaStats = new CharacterStats(150, 20, 15);
$jainaEquipment = new Equipment(null, null);
$jainaWallet = new Wallet(100);
$jainaSword = new Item("Steel Sword", "Weapon", 30, 10, 0, 0, "None");


echo "<pre>";
echo "<p>Character Info:</p>";
echo "<p>Name: " . $jaina->getName() . "</p>";
echo "<p>Role: " . $jaina->getRole() . "</p>";
echo "<br>";
echo "<br><p>Character Stats:</p>";
echo "<p>Health: " . $jainaStats->getHealth() . "</p>";
echo "<p>Attack: " . $jainaStats->getAttack() . "</p>";
echo "<p>Defense: " . $jainaStats->getDefense() . "</p>";
echo "<br>";
echo "<p>Equipment:</p>";
echo "<p>Equipped Weapon: " . $jainaEquipment->getEquippedWeapon() . "</p>";
echo "<p>Equipped Armor: " . $jainaEquipment->getEquippedArmor() . "</p>";
echo "<br>";
echo "<p>Wallet:</p>";
echo "<p>Gold: " . $jainaWallet->getGold() . "</p>";
echo "<br>";
echo "<p>Item Info:</p>";
echo "<p>Name: " . $jainaSword->getName() . "</p>";
echo "<p>Type: " . $jainaSword->getType() . "</p>";
echo "<p>Value: " . $jainaSword->getValue() . "</p>";
echo "<p>Attack Bonus: " . $jainaSword->getAttackBonus() . "</p>";
echo "<p>Defense Bonus: " . $jainaSword->getDefenseBonus() . "</p>";
echo "<p>Health Bonus: " . $jainaSword->getHealthBonus() . "</p>";
echo "<p>Special Effect: " . $jainaSword->getSpecialEffect() . "</p>";

//var_dump($jaina);
//var_dump($jainaStats);
//var_dump($jainaEquipment);
//var_dump($jainaWallet);
//var_dump($jainajainaSword);