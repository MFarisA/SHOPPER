<nav class="bg-red-50 mx-auto px-4">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen p-2">
        <a href={{route('home')}} wire:navigate>
            <img src="{{asset('asset/logos/SHOPPER-BRAND.svg')}}" class="items-center">
        </a>

        <div class="flex items-center">
            <span>categories</span>
        </div>
            <form class="w-full max-w-xl flex-1 mx-auto bg-red-50">
                <form class="w-full max-w-xl mx-auto bg-white flex-1">

                <label class="text-black sr-only">search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <x-eva-search-outline class="w-4 h-4 text-gray-500"/>
                    </div>
                    <input type="search" placeholder="search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 ">
                </div>
            </form>
        <div class="flex items-center mx-9 gap-6">
            <x-untitledui-mail class="h-6 w-6 cursor-pointer"/>
            <x-heroicon-o-shopping-cart class="h-6 w-6 cursor-pointer"/>
{{--            <x-heroicon-o-bell class="h-6 w-6 cursor-pointer"/>--}}
        </div>

        <div class="flex items-center gap-4">
            <div class="flex items-center gap-1 cursor-pointer">
                <img src="{{asset('asset/pluto.png')}}" class="relative rounded-full size-10">
            </div>
        </div>
    </div>
</nav>
