<?php


namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create()
    {
        return view('donate');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);
    
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Charge::create([
            "amount" => $request->amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Donation from " . auth()->user()->email,
        ]);
    
        auth()->user()->transactions()->create([
            'amount' => $request->amount,
            'transaction_date' => now(),
        ]);
    
        return back()->with('success', 'Donation successful!');
    }
}
