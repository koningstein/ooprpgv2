<style>
    p { margin: 2px 0; }
</style>
<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$jaina = new Character();
echo "<p>" . $jaina->setName("Jaina") . "</p>";         // valid
echo "<p>" . $jaina->setName("") . "</p>";               // invalid
echo "<p>" . $jaina->setRole("Warrior") . "</p>";        // valid
echo "<p>" . $jaina->setRole("") . "</p>";               // invalid

$jainaStats = new CharacterStats();
echo "<p>" . $jainaStats->setHealth(100) . "</p>";       // valid
echo "<p>" . $jainaStats->setHealth(-10) . "</p>";       // invalid
echo "<p>" . $jainaStats->setAttack(20) . "</p>";        // valid
echo "<p>" . $jainaStats->setAttack(0) . "</p>";         // invalid
echo "<p>" . $jainaStats->setDefense(15) . "</p>";       // valid
echo "<p>" . $jainaStats->setDefense(0) . "</p>";        // invalid

$jainaEquipment = new Equipment();
echo "<p>" . $jainaEquipment->setEquippedWeapon("Steel jainaSword") . "</p>"; // valid
echo "<p>" . $jainaEquipment->setEquippedWeapon(123) . "</p>";           // invalid
echo "<p>" . $jainaEquipment->setEquippedArmor("Iron Armor") . "</p>";   // valid
echo "<p>" . $jainaEquipment->setEquippedArmor([]) . "</p>";             // invalid

$jainaWallet = new Wallet();
echo "<p>" . $jainaWallet->setGold(50) . "</p>";         // valid
echo "<p>" . $jainaWallet->setGold(-5) . "</p>";         // invalid

$jainaSword = new Item();
echo "<p>" . $jainaSword->setName("Steel sword") . "</p>";   // valid
echo "<p>" . $jainaSword->setName("") . "</p>";              // invalid
$jainaSword->type = 'Weapon';
echo "<p>" . $jainaSword->setValue(30) . "</p>";             // valid
echo "<p>" . $jainaSword->setValue(-1) . "</p>";             // invalid
echo "<p>" . $jainaSword->setAttackBonus(10) . "</p>";       // valid
echo "<p>" . $jainaSword->setAttackBonus(-2) . "</p>";       // invalid
echo "<p>" . $jainaSword->setDefenseBonus(0) . "</p>";       // valid
echo "<p>" . $jainaSword->setDefenseBonus(-1) . "</p>";      // invalid
$jainaSword->healthBonus = 0;
$jainaSword->specialEffect = 'None';

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