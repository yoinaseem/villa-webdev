<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Menu | Burger Bar')]
class Menu extends Component
{
    public function render()
    {
        return view('livewire.menu');
    }
}
