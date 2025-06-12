<nav class="bg-red-50 mx-auto px-4">
    <div class="flex justify-between items-center mx-auto max-w-screen p-2 gap-x-4">

        <div class="flex items-center gap-x-6">
            <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-x-1">
                <img src="{{ asset('asset/logos/shopper.svg') }}" class="h-8" alt="Shopper Brand Logo">
                <span class="font-poppins font-medium text-[20px] text-[#0A8048]">SHOPPER</span>
            </a>
        </div>

        <div class="flex items-center">
            <span class="text-sm font-medium whitespace-nowrap">Categories</span>
        </div>

        <div class="flex-1 max-w-xl">
            <form class="w-full">
                <label for="search-input" class="text-black sr-only">search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <x-eva-search-outline class="w-4 h-4 text-gray-500"/>
                    </div>
                    <input type="search" id="search-input" placeholder="search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50">
                </div>
            </form>
        </div>

        <div class="flex items-center gap-x-3">
            <div class="flex items-center gap-x-3">
                <x-untitledui-mail class="h-6 w-6 cursor-pointer"/>
                <x-heroicon-o-shopping-cart class="h-6 w-6 cursor-pointer"/>
                {{-- <x-heroicon-o-bell class="h-6 w-6 cursor-pointer"/> --}}
            </div>
            <div class="flex items-center">
                <img src="{{ asset('asset/pluto.png') }}" class="relative rounded-full size-10 cursor-pointer">
            </div>
        </div>

    </div>
</nav>
