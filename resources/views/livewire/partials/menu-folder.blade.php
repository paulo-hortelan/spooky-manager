<?php

use Livewire\Volt\Component;

new class extends Component {
    public $folder;

    public function mount($folder)
    {
        $this->folder = $folder;
    }
};

?>

<div>
    @if ($folder->subfolders->isNotEmpty())
        <x-menu-sub :title="$folder->name" icon="o-folder">
            @foreach ($folder->subfolders as $subfolder)
                <livewire:partials.menu-folder :folder="$subfolder" :key="$subfolder->id" />
            @endforeach
        </x-menu-sub>
    @else
        @if ($folder->vaults->isNotEmpty())
            @foreach ($folder->vaults as $vault)
                <x-menu-item :title="$vault->name" icon="o-key" link="{{ route('vault.show', $vault->id) }}" />
            @endforeach
        @else
            <x-menu-item :title="$folder->name" icon="o-folder" />
        @endif

    @endif
</div>
