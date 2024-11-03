<?php

use Livewire\Volt\Component;
use App\Models\Vault;

new class extends Component {
    public $vault;

    public function mount($vaultId)
    {
        $this->vault = Vault::find($vaultId);
    }

    // public function selectVault($vaultId)
    // {
    //     $this->selectedVaultId = $vaultId;
    //     // Optionally emit an event if you want to listen for this outside this component
    //     $this->emit('vaultChanged', $vaultId);
    // }
};

?>

<div>
    <x-header :title="$vault->name" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-input placeholder="Search..." wire:model.live.debounce="search" clearable icon="o-magnifying-glass" />
        </x-slot:middle>
    </x-header>
</div>
