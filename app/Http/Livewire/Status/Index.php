<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\status;
use Livewire\Component;

class Index extends Component
{
    // dari create $status->id
    public $statusId;
    public $perpage = 10;

    protected $listeners = [
        'statusAdded'
    ];

    public function statusAdded($statusId){}

    public function loadmore()
    {
        $this->perpage += 10;
    }

    public function render()
    {
        // menampilkan status punyakita sendiri dari table status yang telah berelasi dengan user
        // $statuses = auth()->user()->statuses()->paginate(10);

        $ids = auth()->user()->follows()->pluck('id');
        $ids->push(auth()->id());

        $statuses = status::whereIn('user_id', $ids)->with('user')->latest()->paginate($this->perpage);
        return view('livewire.status.index', compact('statuses'));
    }
}
