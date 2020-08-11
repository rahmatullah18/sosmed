<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\status;
use Livewire\Component;

class Show extends Component
{
    public $status = [];

    public function mount($hash)
    {
        $this->status = status::with('user')->where('hash', $hash)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.status.show');
    }
}
