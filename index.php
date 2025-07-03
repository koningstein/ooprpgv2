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
echo "Character Info:\n";
$hero->displayInfo();
echo "\nCharacter Stats:\n";
$heroStats->displayStats();
echo "\nEquipment:\n";
$heroEquipment->displayEquipment();
echo "\nWallet:\n";
$heroWallet->displayGold();
echo "\nItem Info:\n";
$sword->displayItem();

//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);