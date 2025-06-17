<footer class="bg-[#0A8048] text-white mt-10">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="space-y-4">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('asset/logos/shopper-white.svg') }}" class="h-8" alt="Shopper Logo">
                    <span class="font-poppins font-bold text-xl">SHOPPER</span>
                </a>
                <p class="text-gray-300 text-sm">
                    Platform e-commerce terdepan untuk menemukan produk berkualitas dengan harga terbaik.
                </p>
            </div>

            <div class="mt-8 md:mt-0">
                <h4 class="font-semibold tracking-wider uppercase">Produk</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Elektronik</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Fashion</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Perabotan</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Penawaran Spesial</a></li>
                </ul>
            </div>

            <div class="mt-8 md:mt-0">
                <h4 class="font-semibold tracking-wider uppercase">Bantuan</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Hubungi Kami</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">FAQ</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Status Pengiriman</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Kebijakan Pengembalian</a></li>
                </ul>
            </div>

            <div class="mt-8 md:mt-0">
                <h4 class="font-semibold tracking-wider uppercase">Berlangganan</h4>
                <p class="mt-4 text-gray-300 text-sm">Dapatkan info produk terbaru dan diskon langsung ke email Anda.</p>
                <form class="mt-4 flex">
                    <input type="email" placeholder="Email Anda" class="w-full rounded-l-md border-gray-300 text-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0A8048]">
                    <button type="submit" class="bg-white text-[#0A8048] font-bold px-4 rounded-r-md hover:bg-gray-200 transition">Kirim</button>
                </form>
            </div>

        </div>

        <hr class="mt-10 border-gray-600">

        <div class="mt-8 flex flex-col md:flex-row justify-between items-center text-sm">
            <p class="text-gray-400">&copy; {{ date('Y') }} SHOPPER. Semua Hak Cipta Dilindungi.</p>
            <div class="flex gap-x-5 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Facebook">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Instagram">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.664-4.919-4.919-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"></path></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Twitter">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.298 1.634 4.209 3.803 4.649-.625.17-1.284.26-1.96.26-.305 0-.6-.03-1.05-.098.63 1.878 2.447 3.248 4.604 3.286-1.623 1.27-3.666 2.023-5.894 2.023-.383 0-.76-.022-1.13-.065 2.096 1.347 4.597 2.12 7.29 2.12 8.756 0 13.541-7.247 13.541-13.541 0-.206-.005-.412-.013-.618.932-.672 1.732-1.511 2.368-2.457z"></path></svg>
                </a>
            </div>
        </div>
    </div>
</footer>