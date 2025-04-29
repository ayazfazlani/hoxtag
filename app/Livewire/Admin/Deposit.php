<?php

namespace App\Livewire\Admin;

use App\Models\Account;
use Livewire\Component;

class Deposit extends Component
{
    public $deposits;
    public function mount()
    {
        $this->deposits = Account::where('type', 'deposit')->with('user')->latest()->get();
        // dd($this->deposits);
    }
    public function render()
    {
        return view('livewire.admin.deposit');
    }
}
