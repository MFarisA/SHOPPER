<div class="relative max-w-screen-xl mx-auto m-6 rounded-2xl overflow-hidden aspect-[1280/266] group">
    <img src="{{asset('asset/carousel1.png')}}" class="w-full h-full object-cover">
    <div class="absolute bottom-5 left-5 flex items-center gap-x-2">
        <button class="w-2.5 h-2.5 rounded-full bg-gray-800" aria-label="Go to slide 1"></button>
        <button class="w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400" aria-label="Go to slide 2"></button>
        <button class="w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-gray-400" aria-label="Go to slide 3"></button>
    </div>
    <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 start-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition">
    <span class="text-2xl" aria-hidden="true">
      <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m15 18-6-6 6-6"></path>
      </svg>
    </span>
        <span class="sr-only">Previous</span>
    </button>
    <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 end-2 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
      <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </span>
    </button>
</div>
