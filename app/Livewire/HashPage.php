<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class HashPage extends Component
{
    public $hash;
    public $hashed;

    public function render()
    {
        if ($this->hash) {
            $this->hashed = Hash::make($this->hash);
        }else{
            $this->hashed = null;
        }
        return view('livewire.hash-page');
    }
}
