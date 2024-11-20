<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Calendar extends Component
{
    #[Layout('app')]
    #[Title('Select a Date & Time - Calendly')]
    public function render()
    {
        return view('livewire.calendar');
    }
}
