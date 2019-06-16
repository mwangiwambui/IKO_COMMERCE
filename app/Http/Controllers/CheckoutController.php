<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orders;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Stripe;


class CheckoutController extends Controller
{
    public function shipping(){
        return view('users.addresses');
    }
    public function payment(){
        return view('users.payment');
    }
    public function storePayment(Request $request){

        // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        Stripe::setApiKey('sk_test_Eu8C7K0abKoeGjPC7qjxGHKa');

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $request->stripeToken;
        $tamount = (int)str_replace(',','',Cart::total());
        try{


            $charge = \Stripe\Charge::create([
                'amount' => $tamount,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $token,


            ]);}catch (\Stripe\Error\Card $e){
            //Cart has been declined
        }

        //create the order
       Orders::createOrder();

       return view('users.thankyou');






    }


}
