<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $clicked = false;
    public $pizzas = 0;
    public $donationAmount = 0;

    public function showInput()
    {
        $this->clicked = true;
    }

    public function updatedDonationAmount()
    {
        $this->calculatePizzas($this->donationAmount);
    }

    public function calculatePizzas($amount)
    {
        // Define the conversion rate for amount to pizzas
        $conversionRate = 10; // For example, 5 euros per pizza

        // Convert the amount to an integer
        $amount = (float) $amount;

        // Calculate the number of pizzas based on the amount donated
        $this->pizzas = $amount / $conversionRate;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
