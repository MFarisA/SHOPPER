<div>
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-30 backdrop-blur-sm backdrop-brightness-50"
            x-data x-on:keydown.escape.window="$wire.call('closeModal')">

            <div class="bg-white rounded-lg p-6 sm:p-8 w-full max-w-md mx-4" @click.stop>

                <form wire:submit="login" class="flex flex-col items-center gap-y-4">

                    <div class="bg-gray-100 rounded-full h-14 w-14 flex items-center justify-center overflow-hidden">
                        <flux:brand logo="{{ asset('asset/logos/shopper.svg') }}" class="size-3 object-contain" />
                    </div>
                    <flux:heading class="font-poppins text-xl font-semibold text-gray-900">
                        Login to your Account
                    </flux:heading>

                    <div class="w-full space-y-5 pt-4">

                        <div>
                            <flux:label for="email">Email</flux:label>
                            <div class="mt-1">
                                <flux:input type="email" id="email" wire:model="email"
                                    placeholder="you@example.com" class="w-full" />
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center">
                                <flux:label for="password">Password</flux:label>
                                <flux:link href="#" class="text-sm" variant="subtle">Forgot Password?</flux:link>
                            </div>
                            <div class="mt-1 relative">

                                <flux:input type="{{ $showPassword ? 'text' : 'password' }}" id="password"
                                    wire:model="password" placeholder="**********" class="w-full" />

                                <div wire:click="togglePasswordVisibility"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">

                                    @if ($showPassword)
                                        <x-heroicon-o-eye-slash class="size-5 text-gray-500" />
                                    @else
                                        <x-heroicon-o-eye class="size-5 text-gray-400" />
                                    @endif

                                </div>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="w-full pt-6 space-y-3">
                        <flux:button type="submit"
                            class="w-full flex justify-center px-4 py-2.5 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700"
                            color="red">
                            Submit
                            <div wire:loading wire:target="login"
                                class="inline-block animate-spin rounded-full h-5 w-5 border-t-2 border-b-2 border-white ml-3">
                            </div>
                        </flux:button>

                        <flux:button type="button" wire:click="closeModal"
                            class="w-full flex justify-center px-4 py-2.5 bg-gray-100 text-gray-800 font-semibold rounded-lg hover:bg-gray-200">
                            Cancel
                        </flux:button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
