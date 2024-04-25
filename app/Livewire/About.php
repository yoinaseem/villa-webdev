<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About Us | Burger Bar')]
class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
