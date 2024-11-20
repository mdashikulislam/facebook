<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    public $loginError = false;
    public $oldPassError = false;
    public $enableLoginForm = true;
    public $showModalFooter = true;
    public $enableLoadingAfterSubmit = false;
    public $twoFaPage = false;
    public $codeError = false;
    protected $listeners = ['calender','openTwoFa'];
    public function mount()
    {
       // $this->dispatch('user-login-response');
    }

    public function codeSubmit()
    {
        $this->dispatch('code-submit');
    }
    public function submitLogin()
    {
        $this->dispatch('show-login-progress');
    }
    public function openLoginModal()
    {
        $this->loginError = false;
        $this->dispatch('open-modal');
    }

    public function openTwoFa()
    {
        $this->loginError =  false;
        $this->oldPassError=false;
        $this->enableLoginForm=false;
        $this->showModalFooter= false;
        $this->enableLoadingAfterSubmit= false;
        $this->twoFaPage=true;
        $this->codeError=false;
    }
    public function calender()
    {
        $this->redirect(route('calendar-calendly'),true);
    }
    #[Layout('app')]
    #[Title('Select a Date & Time - Calendly')]
    public function render()
    {
        return view('livewire.home');
    }
}
