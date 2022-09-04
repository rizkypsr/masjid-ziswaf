<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TransactionDetail extends Component
{
    public function render()
    {
        return view('livewire.transaction-detail')->layout('layouts.app', [
            'header' => null,
        ]);
    }
}
