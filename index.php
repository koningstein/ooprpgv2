<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$hero = new Character();
$hero->name = 'Arthas';
$hero->role = 'Warrior';

$heroStats = new CharacterStats();
$heroStats->health = 100;
$heroStats->attack = 20;
$heroStats->defense = 15;

$heroEquipment = new Equipment();
$heroEquipment->equippedWeapon = null; // or $sword if equipped
$heroEquipment->equippedArmor = null;

$heroWallet = new Wallet();
$heroWallet->gold = 50;

$sword = new Item();
$sword->name = 'Steel Sword';
$sword->type = 'Weapon';
$sword->value = 30;
$sword->attackBonus = 10;
$sword->defenceBonus = 0;
$sword->healthBonus = 0;
$sword->specialEffect = 'None';

echo "<pre>";
var_dump($hero);
var_dump($heroStats);
var_dump($heroEquipment);
var_dump($heroWallet);
var_dump($sword);