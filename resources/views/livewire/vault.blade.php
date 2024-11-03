<?php

use Livewire\Volt\Component;
use App\Models\Vault;

new class extends Component {
    public $vault;

    public function mount($vaultId)
    {
        $this->vault = Vault::find($vaultId);
    }
};

?>

<div>
    <x-header :title="$vault->name" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-input placeholder="Search..." wire:model.live.debounce="search" clearable icon="o-magnifying-glass" />
        </x-slot:middle>
    </x-header>

    @foreach ($vault->secrets as $secrets)
        <x-card title="Your stats" subtitle="Our findings about you" shadow separator class="my-5">
            I have title, subtitle, separator and shadow.
        </x-card>
    @endforeach
</div>
