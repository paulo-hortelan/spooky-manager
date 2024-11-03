<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">

    {{-- NAVBAR mobile only --}}
    <x-nav sticky class="lg:hidden">
        <x-slot:brand>
            <x-app-brand />
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden me-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>



    {{-- MAIN --}}
    <x-main full-width>


        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">

            <div class="p-5 pt-3 flex justify-center h-36">
                <img src="https://cdn-icons-png.flaticon.com/512/685/685844.png" alt="Brand Image"
                    class="block mx-auto" />
            </div>

            {{-- MENU --}}
            <x-menu activate-by-route>

                @if ($user = auth()->user())
                    <x-menu-separator />

                    <x-list-item :item="$user" value="name" no-separator no-hover class="-mx-2 !-my-2 rounded">
                        <x-slot:actions>
                            <x-button icon="m-cog-6-tooth" class="btn-circle btn-ghost btn-xs"
                                tooltip-left="Configurations" no-wire-navigate link="/logout" />
                            <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="Logout"
                                no-wire-navigate link="/logout" />
                        </x-slot:actions>
                    </x-list-item>

                    <x-menu-separator />
                @endif

                <livewire:components.sidebar-items />
            </x-menu>
        </x-slot:sidebar>



        <x-slot:content>
            {{-- {{ $slot }} --}}

            @if (request()->route('vaultId'))
                <livewire:vault :vaultId="request()->route('vaultId')" />
            @else
                <div>Please select a vault to display its details.</div>
            @endif
        </x-slot:content>
    </x-main>

    <x-toast />
</body>

</html>
