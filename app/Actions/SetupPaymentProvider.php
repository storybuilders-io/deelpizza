<?php

namespace App\Actions;

use Mollie\Laravel\Facades\Mollie;
use Spatie\QueueableAction\QueueableAction;

class SetupPaymentProvider
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute(
        $amount
    )
    {
        $sliceCost = 2;
        $amount = (int) $amount;

        $slices = floor($amount / $sliceCost);

        $price = (string) (number_format( $slices * 2, 2, '.', ''));

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $price
            ],
            "description" => "Order #12345",
            "redirectUrl" => route('donate.show'),
            "webhookUrl" => route('webhooks.mollie'),
            "metadata" => [
                "slices" => $slices
            ],
        ]);

        return $payment;
    }
}
