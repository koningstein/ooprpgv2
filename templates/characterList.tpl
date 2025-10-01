{extends file="layout.tpl"}

{block name="content"}
<div class="row justify-content-center mt-5">
    <div class="col-md-10 col-lg-8">
        <h2 class="mb-4">Character List</h2>
        {if count($characters) > 0}
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
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
                        {foreach from=$characters item=character}
                            <tr>
                                <td>{$character->getName()}</td>
                                <td>{$character->getRole()}</td>
                                <td>{$character->getStats()->getHealth()}</td>
                                <td>{$character->getStats()->getAttack()}</td>
                                <td>{$character->getStats()->getDefense()}</td>
                                <td>
                                    <ul class="mb-0">
                                        <li>Weapon: {$character->getEquipment()->getEquippedWeapon()}</li>
                                        <li>Armor: {$character->getEquipment()->getEquippedArmor()}</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="mb-0">
                                        {foreach from=$character->getInventory()->getAllItems() item=item}
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
            </div>
        {else}
            <div class="alert alert-info text-center" role="alert">
                No characters created yet. Create your first character!
            </div>
            <div class="d-flex justify-content-center">
                <a href="index.php?page=createCharacter" class="btn btn-success">
                    Create Character
                </a>
            </div>
        {/if}
    </div>
</div>
{/block}