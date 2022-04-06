<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal;

class PayPalPaymentController extends Controller
{
    public function handlePayment($price)
    {
        $product = [];
        $product['items'] = [
            [
                'name' => 'Nike Joyride 2',
                'price' => $price,
                'desc'  => 'Running shoes for Men',
                'qty' => 2
            ]
        ];

        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.paypal.payment');
        $product['cancel_url'] = route('cancel.paypal.payment');
        $product['total'] = 224;

        $paypalModule = new PayPal;
        $res = $paypalModule->setOptions($product);
        $res = $paypalModule->setOptions($product, true);
        return redirect($res['paypal_link']);
    }


    public function paymentCancel()
    {

        dd('Your payment has been declend. The payment cancelation page goes here!');
    }

    public function paymentSuccess(Request $request)

    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            dd('Payment was successfull. The payment success page goes here!');
        }
        dd('Error occured!');
    }
}
