<?php

use function Livewire\Volt\{state};

state('folder');

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
                <x-menu-item :title="$vault->name" icon="o-key" href="{{ route('vault.show', $vault->id) }}"
                    wire:loading.attr="disabled" />
            @endforeach
        @else
            <x-menu-item :title="$folder->name" icon="o-folder" link="#" />
        @endif

    @endif
</div>
