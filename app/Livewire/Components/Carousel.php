<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Carousel extends Component
{
//    public $slides;
//    public $activeIndex = 0;
//
//    public function mount()
//    {
//        $this->slides = [
//            asset('asset/carousel.png'),
//            asset('asset/carousel2.png'),
//            asset('asset/carousel3.png'),
//            asset('asset/carousel4.png'),
//        ];
//    }
//
//    public function next()
//    {
//        $this->activeIndex = ($this->activeIndex + 1) % count($this->slides);
//    }
//
//    public function previous()
//    {
//        $this->activeIndex = ($this->activeIndex - 1 + count($this->slides)) % count($this->slides);
//    }
//
//    public function goToIndex($index)
//    {
//        $this->activeIndex = $index;
//    }

    public function render()
    {
        return view('livewire.components.carousel');
    }
}
