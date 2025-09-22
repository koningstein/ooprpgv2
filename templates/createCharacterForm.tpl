{extends file="layout.tpl"}

{block name="content"}
<div class="row justify-content-center mt-5">
    <div class="col-md-8 col-lg-6">
        {if isset($error)}
            <div class="alert alert-danger text-center" role="alert">
                {$error}
            </div>
        {/if}
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Create New Character</h4>
            </div>
            <div class="card-body">
                <form action="index.php" method="POST">
                    <input type="hidden" name="action" value="createCharacter">
                    <div class="mb-3">
                        <label for="name" class="form-label">Character Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter character name">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="">Choose a role...</option>
                            <option value="Warrior">Warrior</option>
                            <option value="Mage">Mage</option>
                            <option value="Rogue">Rogue</option>
                            <option value="Healer">Healer</option>
                            <option value="Tank">Tank</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="health" class="form-label">Health</label>
                        <input type="number" class="form-control" id="health" name="health" min="50" max="200" value="100" required>
                    </div>
                    <div class="mb-3">
                        <label for="attack" class="form-label">Attack</label>
                        <input type="number" class="form-control" id="attack" name="attack" min="10" max="50" value="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="defense" class="form-label">Defense</label>
                        <input type="number" class="form-control" id="defense" name="defense" min="5" max="30" value="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="maxInventorySlots" class="form-label">Max Inventory Slots</label>
                        <input type="number" class="form-control" id="maxInventorySlots" name="maxInventorySlots" min="5" max="20" value="10" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create Character</button>
                </form>
            </div>
        </div>
    </div>
</div>
{/block}