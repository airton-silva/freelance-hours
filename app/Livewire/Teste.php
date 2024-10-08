<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Teste extends Component
{

    public string $search = '';

    public function render()
    {
        $users =  User::query()
                    ->when($this->search, fn ($q) => $q->where('name', 'like', "%{$this->search}%"))
                    ->get();
        return view('livewire.teste', [
            'users'=> $users
        ]);
    }
}
