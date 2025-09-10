{extends file="layout.tpl"}

{block name="content"}
  <h1 class="mt-4 mb-4">RPG Game Character Overview</h1>
  <h2>Characters</h2>
  <table class="table table-striped table-bordered">
    <thead class="table-light">
      <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Health</th>
        <th>Attack</th>
        <th>Defense</th>
        <th>Equipment</th>
        <th>Inventory</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$characters item=char}
        <tr>
          <td>{$char->getName()}</td>
          <td>{$char->getRole()}</td>
          <td>{$char->getStats()->getHealth()}</td>
          <td>{$char->getStats()->getAttack()}</td>
          <td>{$char->getStats()->getDefense()}</td>
          <td>
            <ul class="mb-0">
              <li>Weapon: {$char->getEquipment()->getEquippedWeapon()}</li>
              <li>Armor: {$char->getEquipment()->getEquippedArmor()}</li>
            </ul>
          </td>
          <td>
            <ul class="mb-0">
              {foreach from=$char->getInventory()->getAllItems() item=item}
                <li>
                  {$item->getName()} ({$item->getType()}, Value: {$item->getValue()})
                </li>
              {/foreach}
            </ul>
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>

  <div class="my-4">
    <h2>First Battle Result</h2>
    <div class="border rounded p-3 mb-3 bg-light">
      {$battleResult1 nofilter}
    </div>
  </div>
  <div class="my-4">
    <h2>Second Battle Result</h2>
    <div class="border rounded p-3 bg-light">
      {$battleResult2 nofilter}
    </div>
  </div>
{/block}