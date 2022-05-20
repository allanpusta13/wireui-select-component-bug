<div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div class="w-full h-screen px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
        <x-card title="Simple Options">
            <x-select label="Select Status" placeholder="Select one status" :options="['Active', 'Pending', 'Stuck', 'Done']"
                wire:model.defer="model" />
        </x-card>

        <br>

        <x-card title="Multi Select">
            <x-select label="Select Statuses" placeholder="Select many statuses" multiselect :options="['Active', 'Pending', 'Stuck', 'Done']"
                wire:model.defer="model" />
        </x-card>

        <x-card title="">
            <x-select label="Select Status" placeholder="Select one status" :options="[
                ['name' => 'Active', 'id' => 1, 'description' => 'The status is active'],
                ['name' => 'Pending', 'id' => 2, 'description' => 'The status is pending'],
                ['name' => 'Stuck', 'id' => 3, 'description' => 'The status is stuck'],
                ['name' => 'Done', 'id' => 4, 'description' => 'The status is done'],
            ]" option-label="name"
                option-value="id" wire:model.defer="model" />


        </x-card>
    </div>
</div>
