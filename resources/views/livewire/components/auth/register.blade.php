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

                <form class="mt-8 space-y-5">
                    <div>
                        <flux:label for="name" class="block text-sm font-medium text-gray-700">Full Name
                        </flux:label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <flux:label for="email" class="block text-sm font-medium text-gray-700">Email</flux:label>
                        <input type="email" id="email" name="email" placeholder="alex.jordan@gmail.com"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <flux:label for="number" class="block text-sm font-medium text-gray-700">Phone Number</flux:label>
                        <input type="number" id="number" name="number" placeholder="08123456789"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <flux:label for="password" class="block text-sm font-medium text-gray-700">Password</flux:label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <flux:label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                            Password</flux:label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="••••••••"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="pt-2">
                        <flux:button type="submit"
                            class="w-full flex justify-center px-4 py-2.5 border-[#0A8048] hover:bg-[#0A8048]! hover:text-white! bg-gray-200 text-white font-semibold rounded-lg"
                            color="red">
                            Register
                            <div wire:loading wire:target="login"
                                class="inline-block animate-spin rounded-full h-5 w-5 border-t-2 border-b-2 border-white ml-3">
                            </div>
                        </flux:button>
                    </div>
                </form>

                <div class="my-6 flex items-center">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 flex-shrink text-sm text-gray-500">OR</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <flux:button type="button" wire:click="closeModal"
                    class="w-full flex justify-center px-4 py-2.5 bg-gray-100 text-gray-800 font-semibold rounded-lg hover:bg-gray-200 hover:border-[#0A8048]! hover:text-[#0A8048]">
                    <div class="flex items-center gap-x-2">
                        <flux:brand logo="{{ asset('asset/logos/google.svg') }}" class="size-2"></flux:brand>
                        <flux:text class="">
                            Continue with Google
                        </flux:text>
                    </div>
                </flux:button>

                <p class="mt-8 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 hover:underline">
                        Sign in
                    </a>
                </p>

            </div>
        </div>

    </div>
</div>
