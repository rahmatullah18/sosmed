<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\status;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Edit extends Component
{
    use AuthorizesRequests;
    public $status;
    public $body;

    public function mount($hash){
        $this->status = status::where('hash', $hash)->firstOrFail();
        $this->body = $this->status->body;
    }

    public function update()
    {
        $this->authorize('update', $this->status);
        $this->status->update([
            'body' => $this->body,
        ]);

        redirect()->route('status.show', $this->status->hash);
    }

    public function render()
    {   
        $this->authorize('update', $this->status);
        return view('livewire.status.edit');
    }
}
