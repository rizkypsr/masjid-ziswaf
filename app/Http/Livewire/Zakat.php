<?php

namespace App\Http\Livewire;

use App\Models\ZakatModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Zakat extends Component
{

    public $header = 'Zakat';
    public $subtitle = 'Zakat apa aja';

    public $jumlahOrangFitrah = 1;
    public $jumlahMaal = 10000;
    public $zakat = "maal";

    public $showMaal = true;
    public $showFitrah = false;
    public $totalFitrah = 37000;

    public function render()
    {
        return view('livewire.zakat')->layout('layouts.app', [
            'header' => $this->header,
            'subtitle' => $this->subtitle
        ]);
    }

    public function updatedZakat($value)
    {
        if ($value == 'maal') {
            $this->showMaal = true;
            $this->showFitrah = false;
        }

        if ($value == 'fitrah') {
            $this->showFitrah = true;
            $this->showMaal = false;
        }
    }

    public function updatedjumlahMaal($value)
    {
        if ($value < 10000) {
            $this->jumlahMaal = 10000;
        }
    }

    public function updatedJumlahOrangFitrah($value)
    {
        if ($value > 1) {
            $this->totalFitrah = 37000 * $value;
        } else {
            $this->jumlahOrangFitrah = 1;
            $this->totalFitrah = 37000;
        }
    }

    public function submit()
    {
        if ($this->zakat == "maal") {
            $amount = $this->jumlahMaal;
            $totalUserFitrah = null;
        } else {
            $amount = $this->totalFitrah;
            $totalUserFitrah = $this->jumlahOrangFitrah;
        }

        ZakatModel::create([
            "jenis" => $this->zakat,
            "type" => "uang",
            "amount" => $amount,
            "total_user_fitrah" => $totalUserFitrah,
            "user_id" => Auth::user()->id,
        ]);

        return redirect('/');
    }
}
