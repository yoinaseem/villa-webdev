<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Test;


#[Title('Burger Bar')]
class Home extends Component
{
    public function render()
    {
        $items = Test::orderBy('id', 'ASC')->get();

        return view('livewire.home', [
            'items' => $items,
        ]);
    }
}
