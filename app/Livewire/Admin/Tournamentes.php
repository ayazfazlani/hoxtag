<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Tournaments;

class Tournamentes extends Component
{
    public $tournaments;
    public function mount()
    {
        $this->tournaments = Tournaments::with('user')->latest()->get();
        // dd($this->tournaments);
    }
    public function render()
    {
        return view('livewire.admin.tournamentes');
    }
}
