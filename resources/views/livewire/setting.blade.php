<div class="mt-16">
    <div class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-8">
        {{-- Main Grid Layout --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

            {{-- <aside class="md:col-span-3">
                <nav class="space-y-1">
                    <a href="#" wire:navigate
                        class="text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                        aria-current="page">
                        <i class="fa-solid fa-house text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                        <span class="truncate">Home</span>
                    </a>
                    <a href="#" wire:navigate
                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                        <i class="fa-solid fa-chart-pie text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                        <span class="truncate">Analytics</span>
                    </a>
                     <a href="#" wire:navigate
                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                        <i class="fa-solid fa-users text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                        <span class="truncate">Communities</span>
                    </a>
                    <a href="#" wire:navigate
                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                        <i class="fa-solid fa-bullhorn text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                        <span class="truncate">Campaigns</span>
                    </a>
                    <a href="#" wire:navigate
                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center justify-between px-3 py-2 text-sm font-medium rounded-md">
                        <div class="flex items-center">
                             <i class="fa-solid fa-bell text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                             <span class="truncate">Notifications</span>
                        </div>
                        <span class="bg-gray-100 group-hover:bg-gray-200 text-gray-600 text-xs font-medium px-2 py-0.5 rounded-full">10</span>
                    </a>
                    <a href="#" wire:navigate
                        class="bg-gray-100 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                         <i class="fa-solid fa-gear text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                        <span class="truncate">Settings</span>
                    </a>
                </nav>
            </aside> --}}

            <main class="md:col-span-9">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Settings</h1>
                </div>

                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-6" aria-label="Tabs">
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Company</a>
                        <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page">Profile</a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Password</a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Plan</a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Integrations</a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Text</a>
                    </nav>
                </div>

                <form wire:submit.prevent="save" class="mt-6">
                    <div class="bg-white p-6 shadow rounded-lg">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">Profile</h2>
                        <p class="mt-1 text-sm text-gray-500">Update your photo and personal details here.</p>

                        <div class="mt-6 flex items-center gap-5">
                             {{-- @if ($photo)
                                <img class="h-16 w-16 rounded-full object-cover" src="{{ asset('asset/pluto.png') }}" alt="New Profile Picture">
                            @else
                                <img class="h-16 w-16 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" alt="Current Profile Picture">
                            @endif --}}
                            <img class="h-16 w-16 rounded-full object-cover" src="{{ asset('asset/pluto.png') }}" alt="New Profile Picture">
                            <div>
                                <label for="photo-upload" class="cursor-pointer rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <span>Upload Image</span>
                                    <input id="photo-upload" wire:model="photo" name="photo" type="file" class="sr-only">
                                </label>
                                <button type="button" class="ml-3 text-sm font-semibold text-red-600 hover:text-red-500">Remove</button>
                                <p class="mt-2 text-xs text-gray-500">We support PNGs, JPEGs and GIFs under 10MB.</p>
                            </div>
                        </div>

                        {{-- Form Fields --}}
                        <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-6">
                            <div>
                                <label for="full-name" class="block text-sm font-poppins font-medium text-gray-700">Full Name</label>
                                <flux:input type="text" wire:model="fullName" id="full-name" placeholder="xxxx"/>
                            </div>

                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <span class="text-gray-500 sm:text-sm">grovio.xyz/</span>
                                    </div>
                                    <flux:input type="text" wire:model="username" id="username" placeholder="xxxx"/>
                                </div>
                            </div>
                            
                            <div>
                                <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                 <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center">
                                       <select class="h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                          <option>🇮🇩 +62</option>
                                          <option>US +1</option>
                                       </select>
                                    </div>
                                    <flux:input type="text" wire:model="phone" id="phone-number" placeholder="812 3456 7890"/>
                                </div>
                            </div>

                             <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                {{-- <input type="email" wire:model="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                                <flux:input type="email" wire:model="email" id="email"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end gap-x-3">
                        <button type="button" class="rounded-md bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</button>
                        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Save Changes
                            <div wire:loading wire:target="save" class="ml-2">
                                <i class="fa-solid fa-spinner fa-spin"></i>
                            </div>
                        </button>
                    </div>
                </form>

            </main>
        </div>
    </div>
</div>