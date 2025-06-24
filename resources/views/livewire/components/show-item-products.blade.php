<div>
    <div class="container mx-auto px-4 py-12">
        @if ($product)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <img src="{{ asset('asset/pluto.png') }}" alt="{{ $product->name }}" class="w-full h-auto aspect-square object-cover rounded-lg shadow-lg">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-3xl font-bold font-poppins text-gray-900">{{ $product->name }}</h1>
                    
                    <div class="mt-3 flex items-center gap-x-4 text-sm">
                        <div class="flex items-center gap-x-1">
                            <span class="text-gray-500">Terjual x</span>
                            <span class="font-semibold text-gray-700">{{ $product->sold }}</span>
                        </div>
                        <span class="text-gray-300">|</span>
                        <div class="flex items-center gap-x-1">
                            <x-heroicon-s-star class="size-5 text-[#FFC403]"/>
                            <span class="font-semibold text-gray-700">{{ $product->rating }}</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="text-3xl font-extrabold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-lg font-semibold text-gray-800">Deskripsi Produk</h2>
                        <p class="mt-2 text-gray-600 leading-relaxed">
                            {{ $product->description }}
                        </p>
                    </div>
                    
                    <div class="mt-auto pt-8 flex items-center gap-x-4">
                        <flux:button variant="primary" class="w-full">
                            <x-heroicon-s-shopping-cart class="size-5"/>
                            <span>Tambah ke Keranjang</span>
                        </flux:button>
                        <flux:button class="w-full border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            Beli Langsung
                        </flux:button>
                    </div>
                </div>
            </div>
        @else
            <p>Produk tidak ditemukan.</p>
        @endif
    </div>
</div>