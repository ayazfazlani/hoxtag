<?php

namespace App\Livewire;


use Livewire\Component;

class AccountBalance extends Component
{
    public $balance = 1500; // You can fetch this from DB in real use

    public function withdraw()
    {
        if ($this->balance >= 100) {
            $this->balance -= 100; // mock logic
            $this->dispatch('showAlert', 'success', 'Withdrawn $100');
        } else {
            $this->dispatch('showAlert', 'error', 'Insufficient balance!');
        }
    }

    public function addPayment()
    {
        $this->balance += 200; // mock logic
    }
    public function render()
    {
        return view('livewire.account-balance');
    }
}
