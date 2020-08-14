<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\status;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Delete extends Component
{
    use AuthorizesRequests;
    public $status;

    public function mount($hash)
    {
        $this->status = status::where('hash', $hash)->firstOrFail();
    }
    
    public function delete()
    {
        $this->authorize('update', $this->status);
        $this->status->delete();

        return redirect()->route('account.show', $this->status->user->usernameOrHash());
    }
    
    public function render()
    {
        $this->authorize('update', $this->status);
        return view('livewire.status.delete');
    }
}
