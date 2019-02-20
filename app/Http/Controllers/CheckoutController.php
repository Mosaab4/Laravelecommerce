<?php

namespace App\Http\Controllers;

use Mail;
use Cart;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {

        if(Cart::content()->count() == 0)
        {
            Session::flash('info','Your cart still empty. do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function pay()
    {
        Stripe::setApiKey("sk_test_Q6RX4iT3Xz6deobjByxDmbs4");
        $token = request('stripeToken');

        $charge = Charge::create([
            'amount'=>Cart::total() * 100,
            'currency'=>'usd',
            'description'=>'Laravel ecommerce tutorial',
            'source'=>$token
        ]);

        // dd('your card was charged successfully');
        Session::flash('success','Purchase successfull. wait for our email');

        Cart::destroy();
        
        Mail::to(request('stripeEmail'))->send(new \App\Mail\PurchaseSuccess);
        return redirect()->route('index');
    }
}
