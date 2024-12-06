<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use \App\Models\WebsiteStatus as WebsiteStatusModel;
class WebsiteStatus extends Component
{
    public $isDeactivated = false;

    public function mount()
    {
        $this->isDeactivated = WebsiteStatusModel::first()->status;
    }

    public function changeStatus($value)
    {
        WebsiteStatusModel::first()->update([
            'status' => $value
        ]);
        $this->isDeactivated = $value;
    }
    #[Layout('app')]
    public function render()
    {
        return view('livewire.website-status');
    }
}
