<?php

namespace App\Http\Livewire;

use App\Models\WakafModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wakaf extends Component
{
    public $header = 'Wakaf';
    public $subtitle = 'Ayo kapan lagi guys';

    public $paket = "Paket 1";
    public $showOption = false;
    public $optionValue = 1;
    public $total = 750000;

    protected $rules = [
        'optionValue' => 'required|min:1',
    ];

    public function render()
    {
        return view('livewire.wakaf')->layout('layouts.app', [
            'header' => $this->header,
            'subtitle' => $this->subtitle
        ]);
    }

    public function updatedOptionValue($value)
    {
        if ($value) {
            $this->total = 3000000 + ($value * 600000);
        } else {
            $this->total = 3000000;
        }
    }

    public function updatedPaket($value)
    {
        switch ($value) {
            case "Paket 1":
                $this->showOption = false;
                $this->total = 750000;
                break;
            case "Paket 2":
                $this->showOption = false;
                $this->total = 1500000;
                break;
            case "Paket 3":
                $this->showOption = false;
                $this->total = 2000000;
                break;
            case "Paket 4":
                $this->showOption = false;
                $this->total = 2500000;
                break;
            case "Paket Keluarga":
                $this->showOption = false;
                $this->total = 3000000;
                break;
            case "Paket Tambahan":
                $this->showOption = true;
                $this->total = 3000000 + ($this->optionValue * 600000);
                break;
        }
    }

    public function submit()
    {
        $this->validate();

        $description = $this->paket;

        if ($this->paket == "Paket Tambahan") {
            $value = $this->optionValue + 5;
            $description = "{$value} Orang";
        }

        WakafModel::create([
            "description" => $description,
            "amount" => $this->total,
            "user_id" => Auth::user()->id,
        ]);

        return redirect('/');
    }
}
