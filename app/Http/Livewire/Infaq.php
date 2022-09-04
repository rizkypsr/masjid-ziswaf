<?php

namespace App\Http\Livewire;

use App\Models\InfaqModel;
use App\Models\TransactionModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Midtrans\Snap;
use Midtrans\Config;

class Infaq extends Component
{
    public $header = 'Infaq';
    public $subtitle = 'Jangan pelit dong';

    public $infaq = 10000;

    protected $rules = [
        'infaq' => 'required|numeric|min:10000',
    ];

    protected $messages = [
        'infaq.required' => 'Minimal  Infaq Rp. 10.000',
        'infaq.min' => 'Minimal  Infaq Rp. 10.000'
    ];

    public function render()
    {
        return view('livewire.infaq')->layout('layouts.app', [
            'header' => $this->header,
            'subtitle' => $this->subtitle
        ]);
    }

    public function submit()
    {
        $this->validate();

        InfaqModel::create([
            "amount" => $this->infaq,
            "user_id" => Auth::user()->id,
        ]);

        $transaction = TransactionModel::create([
            "user_id" => Auth::user()->id,
        ]);

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $midtrans_params = [
            'transaction_details' => [
                'order_id' => 'MIDTRANS-' . $transaction->id,
                'gross_amount' => (int) $this->infaq,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            "payment_type" => "bank_transfer",
            'enabled_payments' => ['bca_va', 'bni_va', 'bri_va'],
            'vtweb' => []
        ];

        try {
            $payment_url = Snap::createTransaction($midtrans_params)->redirect_url;

            return redirect()->to($payment_url);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        // return redirect('/');
    }
}
