<div class="mt-20">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center md:text-left mb-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Shopping Cart 🛒
            </h1>
        </div>

        @if($this->cartItems->isNotEmpty())
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-x-12">
                {{-- Kolom Kiri: Daftar Item Keranjang --}}
                <section class="lg:col-span-8">
                    <ul role="list" class="divide-y divide-gray-200">
                        @foreach($this->cartItems as $index => $item)
                            <li wire:key="{{ $item['id'] }}" class="flex py-6">
                                {{-- Loading Indicator --}}
                                <div wire:loading wire:target="incrementQuantity('{{ $item['id'] }}'), decrementQuantity('{{ $item['id'] }}'), removeItem('{{ $item['id'] }}')" class="absolute inset-0 bg-white bg-opacity-50 z-10"></div>
                            
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                            <h3>{{ $item['name'] }}</h3>
                                            <p class="ml-4">Rp {{ number_format($item['price']) }}</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">{{ $item['description'] }}</p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        {{-- Quantity Stepper --}}
                                        <div class="flex items-center border border-gray-200 rounded-md">
                                            <flux:button wire:click="decrementQuantity('{{ $item['id'] }}')" icon="minus" variant="ghost" size="sm" class="rounded-r-none" />
                                            <span class="px-4 text-gray-700">{{ $item['quantity'] }}</span>
                                            <flux:button wire:click="incrementQuantity('{{ $item['id'] }}')" icon="plus" variant="ghost" size="sm" class="rounded-l-none" />
                                        </div>

                                        <div class="flex">
                                            <flux:button wire:click="removeItem('{{ $item['id'] }}')" type="button" variant="link" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                Remove
                                            </flux:button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </section>

                {{-- Kolom Kanan: Ringkasan Pesanan --}}
                <section class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-4 lg:mt-0 lg:p-8">
                    <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                    <dl class="mt-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm text-gray-600">Subtotal</dt>
                            <dd class="text-sm font-medium text-gray-900">Rp {{ number_format($this->subtotal) }}</dd>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                            <dt class="flex items-center text-sm text-gray-600">
                                <span>Shipping estimate</span>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">Rp {{ number_format($this->shippingCost) }}</dd>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                            <dt class="text-base font-medium text-gray-900">Order total</dt>
                            <dd class="text-base font-medium text-gray-900">Rp {{ number_format($this->total) }}</dd>
                        </div>
                    </dl>

                    <div class="mt-6">
                        <flux:button 
                            label="Checkout" 
                            class="w-full"
                            size="lg"
                        />
                    </div>
                </section>
            </div>
        @else
            {{-- Tampilan Keranjang Kosong --}}
            <div class="text-center py-16">
                <i class="fa-solid fa-cart-shopping text-6xl text-gray-300"></i>
                <h3 class="mt-4 text-xl font-semibold text-gray-800">Your cart is empty</h3>
                <p class="mt-2 text-gray-500">Looks like you haven't added anything to your cart yet.</p>
                <div class="mt-6">
                    <flux:button 
                        href="{{ route('home') }}" {{-- Arahkan ke halaman produk --}}
                        wire:navigate
                        label="Start Shopping"
                        variant="primary"
                        size="lg"
                    />
                </div>
            </div>
        @endif
    </div>
</div>