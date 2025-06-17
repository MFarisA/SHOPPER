<nav class="bg-white border-b border-gray-200 fixed top-0 w-full z-999"> 
    <div class="flex justify-between items-center mx-auto max-w-7xl px-0 py-3 gap-x-4">
        <div class="flex items-center">
            <a href="{{ route('home') }}" wire:navigate class="flex items-center">
                <img src="{{ asset('asset/logos/shopper.svg') }}" class="h-8" alt="Shopper Brand Logo">
                <span class="font-poppins font-bold text-xl text-[#0A8048]">SHOPPER</span>
            </a>
        </div>

        <ul class="hidden md:flex items-center gap-7">
            <li><a href="{{ route('categori') }}" wire:navigate.prefetch class="text-sm font-medium text-gray-600 hover:text-gray-900">Categories</a></li>
            <li><a href="#" wire:navigate.prefetch class="text-sm font-medium text-gray-600 hover:text-gray-900">Deals</a></li>
            <li><a href="#" wire:navigate.prefetch class="text-sm font-medium text-gray-600 hover:text-gray-900">What's New</a></li>
            <li><a href="#" wire:navigate.prefetch class="text-sm font-medium text-gray-600 hover:text-gray-900">Delivery</a></li>
        </ul>

        <div class="flex-1 max-w-full">
            <form class="w-full">
                <label for="search-input" class="sr-only">search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <x-eva-search-outline class="w-4 h-4 text-gray-500"/>
                    </div>
                    <input type="search" id="search-input" placeholder="Search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </form>
        </div>

        <div class="flex items-center ml-2 gap-x-5">
            <a href="#" wire:navigate.prefetch class="text-gray-500 hover:text-gray-900">
                <x-untitledui-mail class="h-6 w-6"/>
            </a>
            <a href="#" wire:navigate.prefetch class="text-gray-500 hover:text-gray-900">
                <x-heroicon-o-shopping-cart class="h-6 w-6"/>
            </a>
            <a href="#" wire:navigate.prefetch class="flex items-center">
                <img src="{{ asset('asset/pluto.png') }}" class="rounded-full size-9 cursor-pointer">
            </a>
        </div>

    </div>
</nav>
