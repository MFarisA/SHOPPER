<div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4 gap-y-4">
        @foreach ($items as $item)
            <a href="{{ route('item.show', ['slug' => $item->slug]) }}"
               class="block bg-white border border-gray-200 rounded-lg overflow-hidden  flex-col hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                
                <img src="{{ asset('asset/pluto.png') }}" alt="{{ $item->name }}" class="w-full aspect-square object-cover">
                
                <div class="p-4 flex-grow flex flex-col">
                    <div>
                        <p class="text-sm font-poppins font-medium text-gray-800 line-clamp-2">{{ $item->name }}</p>
                    </div>
                    <div class="mt-2 flex items-center justify-between text-xs font-medium">
                        <div class="flex items-center gap-x-1">
                            <x-heroicon-s-star class="size-4 text-[#FFC403]"/>
                            <p>{{ $item->rating }}</p>
                            <span class="text-gray-300">|</span>
                            <p>Terjual {{ $item->sold }}</p>
                        </div>
                    </div>
                    <div class="mt-auto pt-2 flex items-center gap-x-2">
                        <x-heroicon-s-shopping-bag class="size-4 text-[#0A8048]"/>
                        <p class="text-xs font-medium">{{ $item->store }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    @if ($hasMorePages)
        <div class="mt-8 flex items-center justify-center">
            <flux:button
                wire:click="loadMore"
                wire:loading.attr="disabled"
                class="w-48 border border-[#0A8048]! hover:bg-[#0A8048]! disabled:opacity-75 disabled:cursor-wait">
                <flux:text wire:loading wire:target="loadMore">
                    Memuat...
                </flux:text>
                <flux:text wire:loading.remove wire:target="loadMore" class="text-black hover:text-white">
                    Tampilkan Lebih Banyak
                </flux:text>
            </flux:button>
        </div>
    @endif
</div>