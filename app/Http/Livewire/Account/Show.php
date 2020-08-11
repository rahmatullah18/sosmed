<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $user;
    public $bio;
    public $showBio = true;
    public function mount($identifier)
    {
        $this->user = User::where('username' , $identifier)->orWhere('hash', $identifier)->first();
        $this->bio = \Str::limit($this->user->description,120);
    }

    public function readMore()
    {
        $this->bio = $this->user->description;
        $this->showBio = false;
    }

    public function less()
    {
        $this->bio = \Str::limit($this->user->description,120);
        $this->showBio = true;
    }



    public function render()
    {
        $statuses = $this->user->statuses()->with('user')->latest()->paginate();
        return view('livewire.account.show', compact("statuses"));
    }
}
