{extends file="layout.tpl"}

{block name="content"}
<div class="row justify-content-center mt-5">
    <div class="col-md-8 col-lg-6">
        <div class="alert alert-success text-center" role="alert">
            Character created successfully!
        </div>
        <div class="card shadow mb-4">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Character Details</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{$newCharacter->getName()}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{$newCharacter->getRole()}</td>
                    </tr>
                    <tr>
                        <th>Health</th>
                        <td>{$newCharacter->getStats()->getHealth()}</td>
                    </tr>
                    <tr>
                        <th>Attack</th>
                        <td>{$newCharacter->getStats()->getAttack()}</td>
                    </tr>
                    <tr>
                        <th>Defense</th>
                        <td>{$newCharacter->getStats()->getDefense()}</td>
                    </tr>
                    <tr>
                        <th>Max Inventory Slots</th>
                        <td>{$newCharacter->getInventory()->getMaxSlots()}</td>
                    </tr>
                </table>
                <div class="d-flex justify-content-between mt-4">
                    <a href="index.php?page=createCharacter" class="btn btn-primary">Create Another Character</a>
                    <a href="index.php?page=characterList" class="btn btn-secondary">View Character List</a>
                </div>
            </div>
        </div>
        <a href="index.php" class="btn btn-primary w-100">Back to Overview</a>
    </div>
</div>
{/block}