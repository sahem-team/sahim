<x-filament-panels::page>
    <div class="flex items-start gap-8">
        <x-filament-panels::form wire:submit="updateProfil" class="w-full">
            {{ $this->editProfileForm }}

            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        </x-filament-panels::form>
        <x-filament-panels::form wire:submit="updateUser" class="w-full">
            {{ $this->editUserForm }}

            <x-filament-panels::form.actions :actions="$this->getFormActions()" />
        </x-filament-panels::form>

    </div>


</x-filament-panels::page>
