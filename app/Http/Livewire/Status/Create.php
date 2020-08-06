<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;

class Create extends Component
{
    public $body;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'body' => 'max:255|min:2',
        ]);
    }

    public function store()
    {
        $this->validate([
            'body' => 'required',
        ]);

        $status = auth()->user()->statuses()->create([
            'hash' => \Str::random(32),
            'body' => $this->body,
        ]);

        $this->body = "";
        $this->emit('statusAdded', $status->id);
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.status.create');
    }
}
