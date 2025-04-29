<?php

namespace App\Livewire\Account;

use Livewire\Component;
use App\Livewire\Account\Balance;
use Illuminate\Support\Facades\Auth;

class History extends Component
{
    public $user, $account, $name, $transactionSuccess, $transactionPending;
    public function mount()
    {
        $this->user = Auth::user();
        $this->account = $this->user->accounts()
            ->where('status', 'completed')
            ->orderBy('created_at', 'desc')
            ->get();
        $this->transactionSuccess = $this->user->accounts()
            ->where('status', 'completed')
            ->orderBy('created_at', 'desc')
            ->get();
        $this->transactionPending = $this->user->accounts()
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function approve($id)
    {
        $account = $this->user->accounts()->find($id);
        if ($account) {
            $account->update(['status' => 'completed']);
            session()->flash('message', 'Transaction approved successfully.');
        } else {
            session()->flash('error', 'Transaction not found.');
        }
        $this->mount();
    }

    public function reject($id)
    {
        $account = $this->user->accounts()->find($id);
        if ($account) {
            $account->update(['status' => 'pending']);
            session()->flash('message', 'Transaction rejected successfully.');
        } else {
            session()->flash('error', 'Transaction not found.');
        }
        $this->mount();
    }

    public function render()
    {
        return view('livewire.account.history');
    }
}
