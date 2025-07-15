<?php

require_once "Character.php";
require_once "CharacterStats.php";
require_once "Equipment.php";
require_once "Item.php";
require_once "Wallet.php";

$jaina = new Character();
$jainaStats = new CharacterStats();
$jainaEquipment = new Equipment();
$jainaWallet = new Wallet();
$jainaSword = new Item();

echo "<pre>";
var_dump($jaina);
var_dump($jainaStats);
var_dump($jainaEquipment);
var_dump($jainaWallet);
var_dump($jainaSword);