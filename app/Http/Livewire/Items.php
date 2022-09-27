<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
class Items extends Component
{
    public $items;
    public function render()
    {
        $this->items = Item::all();
        return view('livewire.items');
    }
}
