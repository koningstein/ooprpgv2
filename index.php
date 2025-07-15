<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$jaina = new Character();
$jaina->name = 'Jaina';
$jaina->role = 'Warrior';

$jainaStats = new CharacterStats();
$jainaStats->health = 150;
$jainaStats->attack = 20;
$jainaStats->defense = 15;

$jainaEquipment = new Equipment();
$jainaEquipment->equippedWeapon = null; // or $sword if equipped
$jainaEquipment->equippedArmor = null;

$jainaWallet = new Wallet();
$jainaWallet->gold = 50;

$jainaSword = new Item();
$jainaSword->name = 'Steel Sword';
$jainaSword->type = 'Weapon';
$jainaSword->value = 30;
$jainaSword->attackBonus = 10;
$jainaSword->defenceBonus = 0;
$jainaSword->healthBonus = 0;
$jainaSword->specialEffect = 'None';

echo "<pre>";
echo "Character Info:\n";
$jaina->displayInfo();
echo "\nCharacter Stats:\n";
$jainaStats->displayStats();
echo "\nEquipment:\n";
$jainaEquipment->displayEquipment();
echo "\nWallet:\n";
$jainaWallet->displayGold();
echo "\nItem Info:\n";
$jainaSword->displayItem();

//var_dump($jaina);
//var_dump($jainaStats);
//var_dump($jainaEquipment);
//var_dump($jainaWallet);
//var_dump($jainaSword);