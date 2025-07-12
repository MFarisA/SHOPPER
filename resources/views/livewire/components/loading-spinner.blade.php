<div x-show="pageIsLoading" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-white"
     x-transition:leave="transition ease-in duration-300" 
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0" 
     style="display: none;">
    <div class="relative h-16 w-16 flex items-center justify-center">
        <div class="absolute inset-0 animate-spin rounded-full border-4 border-solid border-[#0A8048] border-t-transparent"></div>
        <img src="{{ asset('asset/logos/shopper.svg') }}" alt="Loading..." class="w-10 h-10 relative z-10">
    </div>
</div>
