<?php

namespace App\Http\Livewire;

use App\Models\InfaqModel;
use App\Models\WakafModel;
use App\Models\ZakatModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Transaction extends Component
{

    public $type = 'zakat';

    public $infaq;
    public $zakat;
    public $wakaf;

    public $showZakat = true;
    public $showInfaq = false;
    public $showWakaf = false;

    public function mount()
    {
        $this->infaq = InfaqModel::where('user_id', Auth::user()->id)->get();
        $this->zakat = ZakatModel::where('user_id', Auth::user()->id)->get();
        $this->wakaf = WakafModel::where('user_id', Auth::user()->id)->get();
    }

    public function updatedType($value)
    {
        if ($value == 'zakat') {
            $this->showZakat = true;
            $this->showInfaq = false;
            $this->showWakaf = false;
        }

        if ($value == 'infaq') {
            $this->showInfaq = true;
            $this->showZakat = false;
            $this->showWakaf = false;
        }

        if ($value == 'wakaf') {
            $this->showWakaf = true;
            $this->showZakat = false;
            $this->showInfaq = false;
        }
    }

    public function render()
    {
        return view('livewire.transaction')->layout('layouts.app', [
            'header' => null,
        ]);
    }
}
