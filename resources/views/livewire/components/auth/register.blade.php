<div class="bg-white">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

        <div class="relative hidden lg:flex flex-col justify-end p-12 text-white">
            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2787&auto=format&fit=crop"
                alt="Team working" class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-gray-900 opacity-60"></div>

            <div class="relative z-10">
                <flux:heading level="2" class="text-3xl font-bold leading-tight">
                    "Simply all the tools that my team and I need."
                </flux:heading>
                <div class="mt-4">
                    <flux:text class="font-semibold">Karen Yue</flux:text>
                    <flux:text class="text-gray-300 text-sm">Director of Digital Marketing Technology</flux:text>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center p-8 sm:p-12">
            <div class="w-full max-w-md">

                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Create an account</h1>

                <form action="{{ route('auth.register') }}" method="POST" class="mt-8 space-y-5">
                    @csrf

                    <div>
                        <flux:label for="name">Full Name</flux:label>
                        <flux:input id="name" name="name" type="text" placeholder="Enter your full name"
                            value="{{ old('name') }}" wire:model="name" />
                        @error('name')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <flux:label for="email">Email</flux:label>
                        <flux:input id="email" name="email" type="email" placeholder="alex.jordan@gmail.com"
                            value="{{ old('email') }}" wire:model="email" />
                        @error('email')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <flux:label for="phone_number">Phone number</flux:label>
                        <flux:input id="phone_number" name="phone_number" type="tel" placeholder="Enter your phone number"
                            value="{{ old('phone_number') }}" wire:model="phone_number" />
                        @error('phone_number')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <flux:label for="password">Password</flux:label>
                        <flux:input id="password" name="password" type="password" placeholder="••••••••" 
                                   wire:model.live="password" />
                        @error('password')
                            <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                        
                        <!-- Password Requirements Indicator -->
                        <div class="mt-2 space-y-1 text-xs">
                            <div class="flex items-center space-x-2">
                                <span class="w-4 h-4 rounded-full {{ $hasMinLength ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
                                    <span class="text-white text-xs">✓</span>
                                </span>
                                <span class="text-gray-600">At least 8 characters</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-4 h-4 rounded-full {{ $hasLowercase ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
                                    <span class="text-white text-xs">✓</span>
                                </span>
                                <span class="text-gray-600">One lowercase letter</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-4 h-4 rounded-full {{ $hasUppercase ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
                                    <span class="text-white text-xs">✓</span>
                                </span>
                                <span class="text-gray-600">One uppercase letter</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-4 h-4 rounded-full {{ $hasNumber ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
                                    <span class="text-white text-xs">✓</span>
                                </span>
                                <span class="text-gray-600">One number</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-4 h-4 rounded-full {{ $hasSpecialChar ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
                                    <span class="text-white text-xs">✓</span>
                                </span>
                                <span class="text-gray-600">One special character (@ or !)</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <flux:label for="password_confirmation">Confirm Password</flux:label>
                        <flux:input id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="••••••••" wire:model="password_confirmation" />
                    </div>

                    <div class="pt-2">
                        <flux:button type="submit"
                            class="cursor-pointer w-full flex justify-center px-4 py-2.5 border-[#0A8048] hover:bg-[#0A8048]! hover:text-white! bg-gray-200 text-white font-semibold rounded-lg"
                            color="red">
                            Register
                        </flux:button>
                    </div>
                </form>

                <div class="my-6 flex items-center">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 flex-shrink text-sm text-gray-500">OR</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>
                <flux:button type="button"
                    class="w-full cursor-pointer flex justify-center px-4 py-2.5 bg-gray-100 text-gray-800 font-semibold rounded-lg hover:bg-gray-200 hover:border-[#0A8048]! hover:text-[#0A8048]">
                    <flux:link href="{{ route('social.login', 'google') }}">
                        <div class="flex items-center gap-x-2">
                        <flux:brand logo="{{ asset('asset/logos/google.svg') }}" class="size-2"></flux:brand>
                        <flux:text class="">Continue with Google</flux:text>
                    </div>
                    </flux:link>
                </flux:button>
                <flux:text class="mt-8 text-center text-sm text-gray-600">
                    Already have an account?
                    <flux:link href="{{ route('login') }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500 hover:underline cursor-pointer">
                        Sign in
                    </flux:link>
                </flux:text>

            </div>
        </div>

    </div>
</div>
