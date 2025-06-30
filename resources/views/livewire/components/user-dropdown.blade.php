{{-- <div x-data="{ open: false }" class="relative">
    <button @click="open = !open" 
            @click.away="open = false"
            class="cursor-pointer focus:outline-none block">
        @if (Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" class="rounded-full size-9 object-cover">
        @else
            <img src="{{ asset('asset/pluto.png') }}" class="rounded-full size-9">
        @endif
    </button>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95" 
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75" 
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-100"
         style="display: none;">

        <div class="px-4 py-3 border-b border-gray-100">
            <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->name }}</p>
            <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
        </div>

        <div class="py-1">
            <a href="#" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <x-heroicon-o-user class="h-4 w-4 mr-3 text-gray-400" />
                Profile
            </a>
            </div>

        <div class="border-t border-gray-100">
            <flux:modal.trigger name="logout-confirmation">
                <button @click="open = false; $event.stopPropagation();"
                    class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                    <x-heroicon-o-arrow-right-on-rectangle class="h-4 w-4 mr-3" />
                    Logout
                </button>
            </flux:modal.trigger>
        </div>
    </div>
</div> --}}

<flux:dropdown position="bottom" align="end">
    <flux:profile avatar="{{ asset('asset/pluto.png') }}" name="{{ Auth::user()->name }}" />

    <flux:menu>
        <flux:menu.item href="#" icon="user-circle">Profile</flux:menu.item>
        <flux:menu.item href="#" icon="cog-8-tooth">Setting</flux:menu.item>
        <flux:menu.separator />
        <flux:menu.item href="#" icon="heart">Wish List</flux:menu.item>
        <flux:menu.item href="#" icon="banknotes">Purchase</flux:menu.item>
        <flux:menu.separator />
        <flux:modal.trigger name="edit-profile">
            <flux:menu.item icon="pencil">Edit Profile</flux:menu.item>
        </flux:modal.trigger>
        <flux:menu.separator />
        <flux:modal.trigger name="logout-confirmation">
            <flux:menu.item icon="arrow-right-start-on-rectangle" variant="danger">Logout</flux:menu.item>
        </flux:modal.trigger>
    </flux:menu>
</flux:dropdown>
