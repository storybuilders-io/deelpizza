<?php

namespace App\Http\Livewire;

use App\Actions\SetupPaymentProvider;
use Livewire\Component;

class DonateForm extends Component
{
    public $showDonationButtons = true;

    public function donate($amount)
    {
        // set payment being processed
        $this->showDonationButtons = false;
        $payment = (new SetupPaymentProvider)->execute($amount);

        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function render()
    {
        return view('livewire.donate-form');
    }
}
