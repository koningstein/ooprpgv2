<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RPG Game Character Overview</title>
    <style>
        p { margin: 2px 0; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #aaa; padding: 6px 10px; text-align: left; }
        th { background: #f0f0f0; }
        .battle-section { margin: 20px 0; }
    </style>
</head>
<body>
    <h1>RPG Game Character Overview</h1>
    <h2>Characters</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Health</th>
            <th>Attack</th>
            <th>Defense</th>
            <th>Equipment</th>
            <th>Inventory</th>
        </tr>
        {foreach from=$characters item=char}
            <tr>
                <td>{$char->getName()}</td>
                <td>{$char->getRole()}</td>
                <td>{$char->getStats()->getHealth()}</td>
                <td>{$char->getStats()->getAttack()}</td>
                <td>{$char->getStats()->getDefense()}</td>
                <td>
                    <ul>
                        <li>Weapon: {$char->getEquipment()->getEquippedWeapon()}</li>
                        <li>Armor: {$char->getEquipment()->getEquippedArmor()}</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        {foreach from=$char->getInventory()->getAllItems() item=item}
                            <li>
                                {$item->getName()} ({$item->getType()}, Value: {$item->getValue()})
                            </li>
                        {/foreach}
                    </ul>
                </td>
            </tr>
        {/foreach}
    </table>

    <div class="battle-section">
        <h2>First Battle Result</h2>
        {$battleResult1 nofilter}
    </div>
    <div class="battle-section">
        <h2>Second Battle Result</h2>
        {$battleResult2 nofilter}
    </div>
</body>
</html>