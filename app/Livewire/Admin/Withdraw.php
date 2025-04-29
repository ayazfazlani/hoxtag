<?php

namespace App\Livewire\Admin;

use App\Models\Account;
use Livewire\Component;

class Withdraw extends Component
{
    public $withdraws;
    public function mount()
    {
        $this->withdraws = Account::where('type', 'withdraw')->with('user')->latest()->get();
        // dd($this->withdraws);
    }
    public function render()
    {
        return view('livewire.admin.withdraw');
    }
}
