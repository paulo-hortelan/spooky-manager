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
        <x-menu-item :title="$folder->name" icon="o-folder" link="#" />
    @endif
</div>
