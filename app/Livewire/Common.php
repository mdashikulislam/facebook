<?php

namespace App\Livewire;

use Livewire\Component;

class Common extends Component
{
    protected $listeners = ['receiveStatus'=>'sendStatus'];

    public function sendStatus()
    {
        $this->dispatch('updateStatus');
    }
    public function render()
    {
        return view('livewire.common');
    }
}
