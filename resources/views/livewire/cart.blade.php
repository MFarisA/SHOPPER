<div class="mt-12">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center md:text-left mb-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Shopping Cart 🛒
            </h1>
        </div>

        {{-- Ini adalah tampilan keranjang jika ada isinya --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-x-12">
            {{-- Kolom Kiri: Daftar Item Keranjang --}}
            <section class="lg:col-span-8">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Produk 1" class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>Nama Produk Pertama</h3>
                                    <p class="ml-4">Rp 500.000</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Deskripsi singkat produk pertama.</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                                <div class="flex items-center border border-gray-200 rounded-md">
                                    <button class="flex items-center px-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
                                    </button>
                                    <span class="px-4 text-gray-700">1</span>
                                    <button class="flex items-center px-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v4a1 1 0 01-1 1H6a1 1 0 110-2h4V6a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>

                                <div class="flex">
                                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Produk 2" class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>Nama Produk Kedua</h3>
                                    <p class="ml-4">Rp 250.000</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Deskripsi singkat produk kedua.</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                                <div class="flex items-center border border-gray-200 rounded-md">
                                    <button class="flex items-center px-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
                                    </button>
                                    <span class="px-4 text-gray-700">1</span>
                                    <button class="flex items-center px-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v4a1 1 0 01-1 1H6a1 1 0 110-2h4V6a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>

                                <div class="flex">
                                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            {{-- Kolom Kanan: Ringkasan Pesanan --}}
            <section class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-4 lg:mt-0 lg:p-8">
                <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                <dl class="mt-6 space-y-4">
                    <div class="flex items-center justify-between">
                        <dt class="text-sm text-gray-600">Subtotal</dt>
                        <dd class="text-sm font-medium text-gray-900">Rp 750.000</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="flex items-center text-sm text-gray-600">
                            <span>Shipping estimate</span>
                        </dt>
                        <dd class="text-sm font-medium text-gray-900">Rp 20.000</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <dt class="text-base font-medium text-gray-900">Order total</dt>
                        <dd class="text-base font-medium text-gray-900">Rp 770.000</dd>
                    </div>
                </dl>

                <div class="mt-6">
                    <button class="w-full text-white bg-indigo-600 hover:bg-indigo-700 font-medium rounded-md px-6 py-3">
                        Checkout
                    </button>
                </div>
            </section>
        </div>

        {{-- Ini adalah tampilan keranjang kosong --}}
        {{-- Anda bisa menampilkan ini jika keranjang kosong --}}
        <div class="text-center py-16 hidden">
            <i class="fa-solid fa-cart-shopping text-6xl text-gray-300"></i>
            <h3 class="mt-4 text-xl font-semibold text-gray-800">Your cart is empty</h3>
            <p class="mt-2 text-gray-500">Looks like you haven't added anything to your cart yet.</p>
            <div class="mt-6">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Start Shopping
                </a>
            </div>
        </div>
    </div>
</div>