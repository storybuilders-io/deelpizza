<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieWebhookController extends Controller
{
    public function store(Request $request)
    {
        if (!$request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            $slices = $payment->metadata->slices;

            $pizza = Pizza::where('slices_left', '>=', $slices)->firstOrNew([],
                ['slices_bought' => $slices, 'slices_left' => 5 - $slices]
            );

            if($pizza->getKey()) {
                $pizza->increment('slices_bought', $slices);
                $pizza->decrement('slices_left', $slices);
            }

            if($pizza->slices_left === 0) {
                $pizza->available = true;
            }

            $pizza->save();
        }
    }
}
