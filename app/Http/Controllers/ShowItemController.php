<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ShowItemController extends Controller
{
    public function showItem($slug)
    {
        // Find the item by slug from the database
        $item = Item::where('slug', $slug)->first();

        if (!$item) {
            abort(404, 'Product not found');
        }

        return view('livewire.components.show-item-products', [
            'product' => $item,
        ]);
    }
}
