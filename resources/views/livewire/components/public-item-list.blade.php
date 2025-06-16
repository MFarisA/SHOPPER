@php
    // Data dummy untuk contoh
    $products = [
        ['name' => 'Wireless Earbuds', 'description' => 'High-fidelity sound'],
        ['name' => 'Gaming Mouse', 'description' => 'RGB with 16000 DPI'],
        ['name' => 'Mechanical Keyboard', 'description' => 'Blue Switches'],
        ['name' => '4K Webcam', 'description' => 'Clear video for streaming'],
        ['name' => 'Ultrawide Monitor', 'description' => '34-inch immersive display'],
        ['name' => 'Wireless Earbuds', 'description' => 'High-fidelity sound'],
        ['name' => 'Gaming Mouse', 'description' => 'RGB with 16000 DPI'],
        ['name' => 'Mechanical Keyboard', 'description' => 'Blue Switches'],
        ['name' => '4K Webcam', 'description' => 'Clear video for streaming'],
        ['name' => 'Ultrawide Monitor', 'description' => '34-inch immersive display'],
        ['name' => '4K Webcam', 'description' => 'Clear video for streaming'],
        ['name' => 'Ultrawide Monitor', 'description' => '34-inch immersive display'],
    ];
@endphp

<div class="grid grid-cols-[repeat(auto-fit,minmax(308px,1fr))] gap-4">

    @foreach ($products as $product)
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
            <img src="{{ asset('asset/pluto.png') }}" alt="{{ $product['name'] }}" class="w-full aspect-square object-cover">
            
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <p class="text-lg font-poppins font-medium text-gray-800">{{ $product['name'] }}</p>
                    <p>lala</p>
                </div>
                <div class="flex items-center gap-x-2">
                    <div class="flex gap-2 mt-2">
                        <x-heroicon-s-star class="size-4 text-[#FFC403]"/>
                        <p class="text-xs font-medium">4.9</p>
                        <p class="text-xs font-medium">250+ sold</p>
                    </div>
                </div>
                <div class="mt-2 flex items-center gap-x-2">
                    <x-heroicon-s-shopping-bag class="size-4 text-[#0A8048]"/>
                    <p class="text-xs font-medium">jojo store</p>
                </div>
            </div>
        </div>
    @endforeach

</div>