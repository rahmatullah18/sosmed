<?php

namespace App\Http\Livewire\Account;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    // compenent
    use WithFileUploads;

    // attribut yang lansung konek dengan account.edit
    public $name;
    public $username;
    public $picture;
    public $description;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->username = auth()->user()->username;
        $this->description = auth()->user()->description;
    }

    // validasi realtime
    public function updated($field)
    {
        $this->validateOnly($field, [
                                                // jika username sdh ada atau usernamenya sendiri
            'username' => 'required|min:3|max:25|unique:users,username,' . auth()->id(),
            'name' => 'required|min:3|string',
            'description' => 'required|min:5',
            'picture' => $this->picture ? 'image|mimes:jpeg,png' : "",
        ]);
    } 

    // dari wire:submit.prevent di account.edit 
    public function update()
    {
        
        // jangan lupa tambahkan FILESYSTEM_DRIVER=public di .env
        if($this->picture){
            // delete jika update foto baru
            Storage::delete(auth()->user()->picture);
            // simpan filenya ke storage jika ada file baru 
            $picture = $this->picture->store('images/profile', 'public');
        }else{
            // jika tidak ada file
            $picture = auth()->user()->picture ?? null;
        }

                // jika atribut picture ada maka di simpan di store jika tidak maka atribut di isi

        // update data berdasarkan user 
        auth()->user()->update([
            'name' => $this->name,
            'username' => $this->username,
            'description' => $this->description,
            'picture' => $picture,
        ]);
        
        $identifier = auth()->user()->username;
        return redirect()->route('account.show', $identifier);
    }

    public function render()
    {
        return view('livewire.account.edit');
    }
}
