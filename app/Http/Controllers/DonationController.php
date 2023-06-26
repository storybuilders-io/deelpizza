<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Mollie\Laravel\Facades\Mollie;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show(Request $request)
    {
        return view('donate');
    }

    /**
     * Display the specified resource.
     *
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'slices' => 'required|min:1'
        ]);

        if($validator->fails()) {
            return 'failed';
        }

        $slices = $request->get('slices');
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

        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
