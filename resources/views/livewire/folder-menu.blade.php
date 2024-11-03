<?php

use Livewire\Volt\Component;
use App\Models\Folder;

new class extends Component {
    public $rootFolders;
    public $selectedVaultId;

    public function mount()
    {
        $this->rootFolders = Folder::with('subfolders', 'vaults')->whereNull('parent_id')->get();
    }

    public function selectVault($vaultId)
    {
        $this->selectedVaultId = $vaultId;
        // Optionally emit an event if you want to listen for this outside this component
        $this->emit('vaultChanged', $vaultId);
    }
};

?>

<div>
    @foreach ($rootFolders as $rootFolder)
        <livewire:partials.menu-folder :folder="$rootFolder" :key="$rootFolder->id" />
    @endforeach

</div>
