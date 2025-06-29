<div class="p-10 max-w-md mx-auto mt-24 text-center border border-gray-300 rounded-md font-sans">
    <div class="flex justify-center items-center my-6">
        <img src="{{ asset('asset/logos/shopper.svg') }}" alt="">
    </div>
    <h2 class="text-2xl mb-5">Verifikasi Akun Anda</h2>
    <p class="mb-5 text-gray-600">
        Kami telah mengirimkan kode OTP ke email Anda. Silakan masukkan kode tersebut di bawah ini.
    </p>

    @if (session('message'))
        <div class="text-green-600 mb-5 font-bold">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="verifyOtp">
        <input type="text" wire:model="otp" placeholder="6 digit OTP Code"
               class="px-3 py-3 text-xl text-center tracking-widest rounded border border-gray-300 w-11/12 mb-3">

        @error('otp') <div class="text-red-600 mb-5">{{ $message }}</div> @enderror

        <button type="submit" class="bg-green-700 text-white py-3 px-6 rounded cursor-pointer text-base w-full">
            <span wire:loading.remove>Verifikasi Akun</span>
            <span wire:loading>Memverifikasi...</span>
        </button>
    </form>
</div>