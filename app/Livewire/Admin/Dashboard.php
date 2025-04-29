<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users, $name, $email, $phone, $gameid, $refferalcode;

    public function mount()
    {
        $this->users = User::all();
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->gameid = $user->gameid;
        $this->refferalcode = $user->referral_code;
    }
    public function update($id)
    {
        $user = User::find($id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->gameid = $this->gameid;
        $user->referral_code = $this->refferalcode;
        $user->save();

        session()->flash('message', 'User updated successfully.');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        session()->flash('message', 'User deleted successfully.');
    }
    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gameid' => 'required',
            'refferalcode' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gameid' => $this->gameid,
            'referral_code' => $this->refferalcode,
        ]);

        session()->flash('message', 'User created successfully.');
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
