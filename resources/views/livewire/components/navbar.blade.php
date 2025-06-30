<nav class="bg-white border-b border-gray-200 fixed top-0 w-full z-50">
    <div class="flex justify-between items-center mx-auto max-w-7xl px-4 py-3 gap-x-6">
        <div class="flex items-center">
            <a href="{{ route('home') }}" wire:navigate class="flex items-center">
                <img src="{{ asset('asset/logos/shopper.svg') }}" class="h-8" alt="Shopper Brand Logo">
                <span class="font-poppins font-bold text-xl text-[#0A8048]">SHOPPER</span>
            </a>
        </div>

        <div class="hidden md:flex flex-1 max-w-lg">
            <form class="w-full">
                <label for="search-input" class="sr-only">search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <x-eva-search-outline class="w-4 h-4 text-gray-500" />
                    </div>
                    <input type="search" id="search-input" placeholder="Search"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </form>
        </div>

        <div class="flex items-center gap-x-5">
            <ul class="hidden md:flex items-center gap-x-5">
                <li>
                    <a href="{{ route('categori') }}" wire:navigate.prefetch
                        class="text-sm font-medium text-gray-600 hover:text-gray-900">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="#" wire:navigate.prefetch
                        class="text-sm font-medium text-gray-600 hover:text-gray-900">
                        Deals
                    </a>
                </li>
                <li>
                    <a href="#" wire:navigate.prefetch
                        class="text-sm font-medium text-gray-600 hover:text-gray-900">
                        What's New
                    </a>
                </li>
            </ul>

            <div class="hidden md:block h-6 w-px bg-gray-200"></div>

            <div class="flex items-center gap-x-3">

                @auth
                    <div class="flex items-center gap-x-4">
                        <a href="#" wire:navigate.prefetch class="text-gray-500 hover:text-gray-900">
                            <x-untitledui-mail class="h-6 w-6" />
                        </a>
                        <a href="#" wire:navigate.prefetch class="text-gray-500 hover:text-gray-900">
                            <x-heroicon-o-shopping-cart class="h-6 w-6" />
                        </a>

                        <livewire:components.user-dropdown />
                    </div>
                @endauth

                @guest
                    <div class="flex items-center gap-x-2">
                        <flux:button x-data x-on:click="$dispatch('open-login-modal')"
                            class="px-4 py-2 font-poppins text-sm font-medium text-gray-600  border border-[#0A8048] hover:bg-[#0A8048]! hover:text-white rounded-lg cursor-pointer">
                            Login
                        </flux:button>
                        <a href="{{ route('register') }}"
                            class="px-4 font-poppins cursor-pointer py-2 text-sm font-medium text-white bg-[#0A8048] rounded-lg hover:bg-[#0A8048]/90">
                            Register
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </div>
</nav>
