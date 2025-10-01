<?php
require_once "vendor/autoload.php";

use Game\Battle;
use Game\Character;
use Game\CharacterStats;
use Game\Equipment;
use Game\Item;
use Game\Wallet;
use Game\Inventory;
use Game\CharacterList;
use Smarty\Smarty;

session_start();
// Initialize Smarty
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

// Check for 'page' GET parameter
$page = $_GET['page'] ?? '';
$characterList = $_SESSION['characterList'] ?? new CharacterList();

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

    $characterList->addCharacter($character);
    $_SESSION['characterList'] = $characterList;

    $smarty->assign('newCharacter', $character);
    $smarty->display('characterCreated.tpl');
    exit;
}
// Show create character form if requested
if ($page === 'createCharacter') {
    $smarty->display('createCharacterForm.tpl');
    exit;
}
if ($page === 'characterList') {
    $characters = $characterList->getCharacters();
    $smarty->assign('characters', $characters);
    $smarty->display('characterList.tpl');
    exit;
}

$smarty->display('layout.tpl');

$_SESSION['characterList'] = $characterList;