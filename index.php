<style>
    p { margin: 2px 0; }
</style>
<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$hero = new Character();
echo "<p>" . $hero->setName("Arthas") . "</p>";         // valid
echo "<p>" . $hero->setName("") . "</p>";               // invalid
echo "<p>" . $hero->setRole("Warrior") . "</p>";        // valid
echo "<p>" . $hero->setRole("") . "</p>";               // invalid

$heroStats = new CharacterStats();
echo "<p>" . $heroStats->setHealth(100) . "</p>";       // valid
echo "<p>" . $heroStats->setHealth(-10) . "</p>";       // invalid
echo "<p>" . $heroStats->setAttack(20) . "</p>";        // valid
echo "<p>" . $heroStats->setAttack(0) . "</p>";         // invalid
echo "<p>" . $heroStats->setDefense(15) . "</p>";       // valid
echo "<p>" . $heroStats->setDefense(0) . "</p>";        // invalid

$heroEquipment = new Equipment();
echo "<p>" . $heroEquipment->setEquippedWeapon("Steel Sword") . "</p>"; // valid
echo "<p>" . $heroEquipment->setEquippedWeapon(123) . "</p>";           // invalid
echo "<p>" . $heroEquipment->setEquippedArmor("Iron Armor") . "</p>";   // valid
echo "<p>" . $heroEquipment->setEquippedArmor([]) . "</p>";             // invalid

$heroWallet = new Wallet();
echo "<p>" . $heroWallet->setGold(50) . "</p>";         // valid
echo "<p>" . $heroWallet->setGold(-5) . "</p>";         // invalid

$sword = new Item();
echo "<p>" . $sword->setName("Steel Sword") . "</p>";   // valid
echo "<p>" . $sword->setName("") . "</p>";              // invalid
$sword->type = 'Weapon';
echo "<p>" . $sword->setValue(30) . "</p>";             // valid
echo "<p>" . $sword->setValue(-1) . "</p>";             // invalid
echo "<p>" . $sword->setAttackBonus(10) . "</p>";       // valid
echo "<p>" . $sword->setAttackBonus(-2) . "</p>";       // invalid
echo "<p>" . $sword->setDefenseBonus(0) . "</p>";       // valid
echo "<p>" . $sword->setDefenseBonus(-1) . "</p>";      // invalid
$sword->healthBonus = 0;
$sword->specialEffect = 'None';

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