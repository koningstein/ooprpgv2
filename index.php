<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$hero = new Character();
$heroStats = new CharacterStats();
$heroEquipment = new Equipment();
$heroWallet = new Wallet();
$sword = new Item();

echo "<pre>";
var_dump($hero);
var_dump($heroStats);
var_dump($heroEquipment);
var_dump($heroWallet);
var_dump($sword);