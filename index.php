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
$jaina->name = 'Jaina';
$jaina->role = 'Warrior';
$hero = new Character();
echo "<p>" . $hero->setName("Arthas") . "</p>";         // valid
echo "<p>" . $hero->setName("") . "</p>";               // invalid
echo "<p>" . $hero->setRole("Warrior") . "</p>";        // valid
echo "<p>" . $hero->setRole("") . "</p>";               // invalid

$jainaStats = new CharacterStats();
$jainaStats->health = 150;
$jainaStats->attack = 20;
$jainaStats->defense = 15;
$heroStats = new CharacterStats();
echo "<p>" . $heroStats->setHealth(100) . "</p>";       // valid
echo "<p>" . $heroStats->setHealth(-10) . "</p>";       // invalid
echo "<p>" . $heroStats->setAttack(20) . "</p>";        // valid
echo "<p>" . $heroStats->setAttack(0) . "</p>";         // invalid
echo "<p>" . $heroStats->setDefense(15) . "</p>";       // valid
echo "<p>" . $heroStats->setDefense(0) . "</p>";        // invalid

$jainaEquipment = new Equipment();
$jainaEquipment->equippedWeapon = null; // or $sword if equipped
$jainaEquipment->equippedArmor = null;
$heroEquipment = new Equipment();
echo "<p>" . $heroEquipment->setEquippedWeapon("Steel Sword") . "</p>"; // valid
echo "<p>" . $heroEquipment->setEquippedWeapon(123) . "</p>";           // invalid
echo "<p>" . $heroEquipment->setEquippedArmor("Iron Armor") . "</p>";   // valid
echo "<p>" . $heroEquipment->setEquippedArmor([]) . "</p>";             // invalid

$jainaWallet = new Wallet();
$jainaWallet->gold = 50;
$heroWallet = new Wallet();
echo "<p>" . $heroWallet->setGold(50) . "</p>";         // valid
echo "<p>" . $heroWallet->setGold(-5) . "</p>";         // invalid

$jainaSword = new Item();
$jainaSword->name = 'Steel Sword';
$jainaSword->type = 'Weapon';
$jainaSword->value = 30;
$jainaSword->attackBonus = 10;
$jainaSword->defenceBonus = 0;
$jainaSword->healthBonus = 0;
$jainaSword->specialEffect = 'None';
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
echo $jaina->displayInfo();
echo "\nCharacter Stats:\n";
echo $jainaStats->displayStats();
echo "\nEquipment:\n";
echo $jainaEquipment->displayEquipment();
echo "\nWallet:\n";
echo $jainaWallet->displayGold();
echo "\nItem Info:\n";
echo $jainaSword->displayItem();

//var_dump($jaina);
//var_dump($jainaStats);
//var_dump($jainaEquipment);
//var_dump($jainaWallet);
//var_dump($jainaSword);