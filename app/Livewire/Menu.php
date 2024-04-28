<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\MenuItems;



#[Title('Menu | Burger Bar')]
class Menu extends Component
{

    public function render()
    {
        $menu = MenuItems::orderBy('id', 'ASC')->get();

        return view('livewire.menu', [
            'menu' => $menu
        ]);
    }
}
