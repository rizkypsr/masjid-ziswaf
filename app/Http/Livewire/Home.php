<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $header = 'Investasi Akhiratmu';
    public $subtitle = 'Kekalkan Harta, Meraih Berkah';

    public function render()
    {
        return view('livewire.home')->layout('layouts.app', [
            'header' => $this->header,
            'subtitle' => $this->subtitle
        ]);
    }
}
