<?php
require_once "vendor/autoload.php";

use Game\Battle;
use Game\Character;
use Game\CharacterStats;
use Game\Equipment;
use Game\Item;
use Game\Wallet;
use Game\Inventory;
use Smarty\Smarty;

// Initialize Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

// Check for 'page' GET parameter
$page = $_GET['page'] ?? '';

// Handle POST: create character
if ($page === 'createCharacter' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ['name', 'role', 'health', 'attack', 'defense', 'maxInventorySlots'];
    $missingFields = [];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missingFields[] = ucfirst($field);
        }
    }
    if (!empty($missingFields)) {
        $errorMsg = 'Please fill in the following fields: ' . implode(', ', $missingFields) . '.';
        $smarty->assign('error', $errorMsg);
        $smarty->display('createCharacterForm.tpl');
        exit;
    }
    $stats = new CharacterStats();
    $stats->setStats((int)$_POST['health'], (int)$_POST['attack'], (int)$_POST['defense']);
    $character = new Character((int)$_POST['maxInventorySlots']);
    $character->setCharacter($_POST['name'], $_POST['role'], $stats);

    $smarty->assign('newCharacter', $character);
    $smarty->display('characterCreated.tpl');
    exit;
}
// Show create character form if requested
if ($page === 'createCharacter') {
    $smarty->display('createCharacterForm.tpl');
    exit;
}

// Jaina
$jainaStats = new CharacterStats();
$jainaStats->setStats(150, 20, 15) . "<br>";
$jaina = new Character(12);
$jaina->setCharacter("Jaina", "Warrior", $jainaStats) . "<br>";
$jainaEquipment = new Equipment();
$jainaEquipment->setEquipment(null, null) . "<br>";
$jainaWallet = new Wallet();
$jainaWallet->setGold(100) . "<br>";
$jainaSword = new Item();
$jainaSword->setItem("Steel Sword", "Weapon", 30, 10, 0, 0, "None") . "<br>";
$jaina->getInventory()->addItem($jainaSword);
$jaina->equipWeapon($jaina->getInventory()->getItem("Steel Sword"));

// Aria
$ariaStats = new CharacterStats();
$ariaStats->setStats(110, 30, 5) . "<br>";
$aria = new Character(8);
$aria->setCharacter("Aria", "Archer", $ariaStats) . "<br>";
$ariaEquipment = new Equipment();
$ariaEquipment->setEquipment("Longbow", null) . "<br>";
$ariaWallet = new Wallet();
$ariaWallet->setGold(100) . "<br>";
$ariaRing = new Item();
$ariaRing->setItem("Magic Ring", "accessory", 250, 15) . "<br>";
$aria->getInventory()->addItem($ariaRing);

// Thorgar
$thorgarStats = new CharacterStats();
$thorgarStats->setStats(100, 30, 5) . "<br>";
$thorgar = new Character();
$thorgar->setCharacter("Thorgar", "Mage", $thorgarStats) . "<br>";
$thorgarEquipment = new Equipment();
$thorgarEquipment->setEquipment("Magic Staff", "Wizard Robe") . "<br>";
$thorgarWallet = new Wallet();
$thorgarWallet->setGold(180) . "<br>";
$thorgarPotion = new Item();
$thorgarPotion->setItem("Mana Potion", "consumable", 40, 0, 0, 20) . "<br>";
$thorgar->getInventory()->addItem($thorgarPotion);

$characters = [$jaina, $aria, $thorgar];

// Start first fight
$battle1 = new Battle();
$result1 = $battle1->startFight($aria, $thorgar);

// Reset health of both characters
$aria->getStats()->resetHealth();
$thorgar->getStats()->resetHealth();

// Start second fight
$battle2 = new Battle();
$result2 = $battle2->startFight($aria, $thorgar);

// Assign variables to Smarty
$smarty->assign('characters', $characters);
$smarty->assign('battleResult1', $result1);
$smarty->assign('battleResult2', $result2);

// Display the template
$smarty->display('gameOverview.tpl');
echo "<pre>";
var_dump($battle1);
//var_dump($hero);
//var_dump($heroStats);
//var_dump($heroEquipment);
//var_dump($heroWallet);
//var_dump($sword);