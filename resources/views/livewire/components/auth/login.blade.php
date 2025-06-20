<div>
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-30 backdrop-blur-sm backdrop-brightness-50"
            wire:call='closeModal'>
            <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
                <div class="flex justify-between items-center">
                    <h1 class="font-poppins">Login</h1>
                    <button wire:click='closeModal' class="text-gray-500 hover:text-gray-800 text-xl font-poppins">
                        <i class="fa-solid fa-square-xmark size-6"></i>
                    </button>
                </div>
                <form wire:submit.prevent='login'>
                    <div class="">
                        <label for="email">Email</label>
                        <input type="email" id="email" wire:model='email'>
                        @error('email')
                            <span>{{  }}</span>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>

{{-- <div>
    @if ($showModal)
    <div 
    class="fixed inset-0 z-50 flex items-center justify-center  bg-opacity-75 backdrop-brightness-40"
        x-data
        x-on:keydown.escape.window="$wire.call('closeModal')"
    >
        <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md mx-4">
            <div class="flex justify-between items-center border-b pb-3 mb-4">
                <h3 class="text-xl font-semibold">Login</h3>
                <button wire:click="closeModal" class="text-gray-500 hover:text-gray-800">&times;</button>
            </div>

            <form wire:submit.prevent="login">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" wire:model="email"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" wire:model="password"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @error('password') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>
                
                <div class="flex justify-end space-x-4">
                    <button type="button" wire:click="closeModal"
                            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                        Batal
                    </button>
                    <button type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Login
                        <div wire:loading wire:target="login" class="inline-block animate-spin rounded-full h-4 w-4 border-t-2 border-b-2 border-white ml-2"></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif
</div> --}}
