<?php

namespace App\Livewire\Components;

use App\Models\Item;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ShowItemProducts extends Component
{
    public $product;

    public function mount($slug)
    {
        $this->product = Item::where('slug', $slug)->first();
        
        if (!$this->product) {
            abort(404, 'Product not found');
        }
    }

    public function render()
    {
        return view('livewire.components.show-item-products');
    }
}
