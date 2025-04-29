<?php

namespace App\Livewire\Account;

use App\Models\Account;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;


class Balance extends Component
{
    //  put here file upload trait
    use WithFileUploads;
    public $user, $account, $name, $transactionApproved, $transactionPending;
    public $amount, $method, $status, $type, $voucher;
    public $approvedDeposits, $approvedWithdrawals, $pendingDeposits, $pendingWithdrawals;
    public $user_id;
    public $balance, $withdrawls;

    public function mount()
    {
        $this->user = Auth::user();
        $user = $this->user;
        $this->user_id = $user->id;

        // dd($this->user_id);
        // Total deposited and completed
        $this->approvedDeposits = $user->accounts()
            ->where('type', 'deposit')
            ->where('status', 'completed')
            ->sum('amount');

        // Total withdrawals and approved
        $this->approvedWithdrawals = $user->accounts()
            ->where('type', 'withdraw')
            ->where('status', 'completed')
            ->sum('amount');
        // Total deposits and pending   
        $this->pendingDeposits = $user->accounts()
            ->where('type', 'deposit')
            ->where('status', 'pending')
            ->sum('amount');
        // Total withdrawals and pending
        $this->pendingWithdrawals = $user->accounts()
            ->where('type', 'withdraw')
            ->where('status', 'pending')
            ->sum('amount');

        // Initialize balance
        $this->balance = $this->approvedDeposits - $this->approvedWithdrawals;
        $this->withdrawls = $this->approvedWithdrawals;
    }

    // deposit function 
    public function deposit()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'method' => 'required|string|max:255',
            'voucher' => 'required|image|max:1024',
        ]);
        $data = [
            'user_id' => $this->user_id,
            'name' => $this->name,
            'amount' => $this->amount,
            'method' => $this->method,
            'type' => 'deposit',
            'voucher' => $this->voucher,
        ];
        // handele image upload
        if ($this->voucher) {
            $data['voucher'] = $this->voucher->store('vouchers', 'public');
        }
        // create account
        $data['status'] = 'pending';
        $data['type'] = 'deposit';
        $data['user_id'] = $this->user_id;
        $data['voucher'] = $this->voucher->store('vouchers', 'public');

        Account::create($data);
        $this->reset(['name', 'amount', 'method', 'voucher']);
        // $this->dispatchBrowserEvent('alert', [
        //     'type' => 'success',
        //     'message' => 'Deposit request submitted successfully.',
        // ]);
    }

    // withdraw that also reduce the balance 
    public function withdraw()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'method' => 'required|string|max:255',
        ]);
        $data = [
            'user_id' => $this->user_id,
            'name' => $this->name,
            'amount' => $this->amount,
            'method' => $this->method,
            'type' => 'withdraw',

        ];

        $data['status'] = 'pending';
        $data['type'] = 'withdraw';
        $data['user_id'] = $this->user_id;
        // handle balance 
        if ($this->amount > $this->balance) {
            session()->flash('error', 'Insufficient balance.');
            return;
        }
        $this->balance -= $this->amount;
        $this->withdrawls += $this->amount;
        // the purpose the above two lines are to update the balance and withdrawls

        Account::create($data);
        $this->reset(['name', 'amount', 'method', 'voucher']);
    }

    protected $listeners = ['balanceUpdated' => 'refreshBalance'];

    public function refreshBalance()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.account.balance');
    }
}
