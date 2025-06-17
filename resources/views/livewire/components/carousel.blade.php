<div class="relative max-w-screen-xl mx-auto m-6 rounded-2xl overflow-hidden group" wire:poll.3s='next'>

    <div class="flex transition-transform duration-500 ease-in-out"
        style="transform: translateX(-{{ $activeIndex * 100 }}%);">

        @foreach ($slides as $index => $slide)
            <div class="w-full flex-shrink-0">
                <div class="aspect-[1280/266]">
                    <img src="{{ $slide }}" alt="Carousel image {{ $index + 1 }}"
                        class="w-full h-full object-cover">
                </div>
            </div>
        @endforeach

    </div>

    <div class="absolute bottom-5 left-5 flex items-center gap-x-2 z-10">
        @foreach ($slides as $index => $slide)
            <button wire:click="goToIndex({{ $index }})" aria-label="Go to slide {{ $index + 1 }}"
                class="w-2.5 h-2.5 rounded-full transition
                           {{ $activeIndex == $index ? 'bg-white' : 'bg-gray-400 hover:bg-white' }}">
            </button>
        @endforeach
    </div>
    <button type="button" wire:click="previous"
        class="absolute top-1/2 start-4 -translate-y-1/2 z-10 inline-flex justify-center items-center size-10 bg-white/50 hover:bg-white/80 border border-gray-200 text-gray-800 rounded-full shadow-md transition
                   opacity-0 group-hover:opacity-100">
        <span class="sr-only">Previous</span>
        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"></path>
        </svg>
    </button>

    <button type="button" wire:click="next"
        class="absolute top-1/2 end-4 -translate-y-1/2 z-10 inline-flex justify-center items-center size-10 bg-white/50 hover:bg-white/80 border border-gray-200 text-gray-800 rounded-full shadow-md transition
                   opacity-0 group-hover:opacity-100">
        <span class="sr-only">Next</span>
        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
        </svg>
    </button>

    <button type="button" wire:click="previous" class="absolute top-1/2 start-4 ...">
    </button>
    <button type="button" wire:click="next" class="absolute top-1/2 end-4 ...">
    </button>
</div>
