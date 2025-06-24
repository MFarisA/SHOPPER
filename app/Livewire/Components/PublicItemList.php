<?php

namespace App\Livewire\Components;

use App\Models\Item; // 1. Impor Model Item Anda
use Livewire\Component;

class PublicItemList extends Component
{
    public int $initialLoad = 10;
    public int $loadAmount = 5;
    public int $visibleItems;

    public function mount()
    {
        $this->visibleItems = $this->initialLoad;
    }

    public function loadMore()
    {
        $this->visibleItems += $this->loadAmount;
    }

    public function render()
    {
        $items = Item::latest()->take($this->visibleItems)->get();
        $totalItems = Item::count();

        return view('livewire.components.public-item-list', [
            'items' => $items,
            'hasMorePages' => $totalItems > $this->visibleItems
        ]);
    }
}