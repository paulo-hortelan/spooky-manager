<?php

use Livewire\Volt\Component;
use App\Models\Folder;

new class extends Component {
    public $rootFolders;

    public function mount()
    {
        $this->rootFolders = Folder::with('subfolders', 'vaults')->whereNull('parent_id')->get();
    }
};

?>

<div>
    @foreach ($rootFolders as $rootFolder)
        <livewire:partials.menu-folder :folder="$rootFolder" :key="$rootFolder->id" />
    @endforeach

</div>
