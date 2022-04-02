<?php

namespace App\Http\Controllers\User\Payment;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Stripe\Token;

class StripeController extends Controller
{
    /*
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function stripe()
    {
        return view('stripe');
    }*/

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripeAccess(Request $request)
    {
        $data = Card::where('userId', $request->userId)->first();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripeToken = Token::create(array(
            "card" => array(
                "number"    => $data->creditCardNumber,
                "exp_month" => 2/*str_before($data->get('expirationDate'), '/')*/,
                "exp_year"  => 2022/*str_after($data->get('expirationDate'), '/')*/,
                "cvc"       => $data->cvc,
                "name"      => $data->firstName . " " . $data->lastName
            )
        ));
        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $stripeToken,
            "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
