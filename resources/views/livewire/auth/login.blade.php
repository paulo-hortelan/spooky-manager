<div class="container max-w-md p-4 mx-auto">
    <x-header separator progress-indicator>
        <x-slot:brand>
            <x-icon name="o-envelope" class="w-12 h-12 p-2 text-white bg-orange-500 rounded-full" />
        </x-slot:brand>
    </x-header>
    <x-form wire:submit="authenticate">
        <x-input label="Email" icon="o-envelope" wire:model="email" hint="Enter your email" />
        <x-input label="Password" wire:model="password" icon="o-key" type="password" hint="Enter your password" />

        <x-slot:actions>
            {{--
            <x-button link="{{ route('password.request') }}" label="Forgot Password" /> --}}
            <x-button label="Login" class="btn-success" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>