<div>
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-30 backdrop-blur-sm backdrop-brightness-50"
            x-data x-on:keydown.escape.window="$wire.call('closeModal')">

            <div class="bg-white rounded-lg p-6 sm:p-8 w-full max-w-md mx-4" @click.stop>

                <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col items-center gap-y-4">
                    @csrf
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
                                <flux:input type="email" id="email" name="email" 
                                    placeholder="you@example.com" class="w-full" value="{{ old('email') }}" />
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
                                    name="password" placeholder="**********" class="w-full" />

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
                            class="w-full cursor-pointer flex justify-center px-4 py-2.5 border-[#0A8048] hover:bg-[#0A8048]! hover:text-white! bg-gray-200 text-white font-semibold rounded-lg"
                            color="red">
                            Log In
                        </flux:button>

                        <div class="relative flex items-center">
                            <div class="flex-grow border-t border-gray-200"></div>
                            <span class="flex-shrink mx-4 text-sm font-medium text-gray-400">OR</span>
                            <div class="flex-grow border-t border-gray-200"></div>
                        </div>

                        <flux:button type="button" wire:click="closeModal"
                            class="w-full flex cursor-pointer justify-center px-4 py-2.5 bg-gray-100 text-gray-800 font-semibold rounded-lg hover:bg-gray-200 hover:border-[#0A8048]! hover:text-[#0A8048]">
                            <div class="flex items-center gap-x-2">
                                <flux:brand logo="{{ asset('asset/logos/google.svg') }}" class="size-2"></flux:brand>
                                <flux:text class="">
                                    Continue with Google
                                </flux:text>
                            </div>
                        </flux:button>

                        <div class="flex text-center justify-center">
                            <flux:text class="text-sm text-gray-600">
                                Don't have an account?
                                <flux:link href="#" wire:click="openRegisterModal" variant="subtle"
                                    class="text-gray-500 hover:text-[#0A8048]!">
                                    Register
                                </flux:link>
                            </flux:text>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
