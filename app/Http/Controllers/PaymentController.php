<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebToPay;

class PaymentController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function request()
    {
        $post = $_POST;

        $order = array(
            'amount' => 1000,
            'currency' => 'EUR',
            'orderid' => '1444441',
        );

        $config = array(
            'projectid' => '230974',
            'sign_password' => '1a160afde820d564721b88b9ec1e188a',
            'accepturl' => resource_path('views/accept.blade.php'),
            'cancelurl' => resource_path('views/cancel.blade.php'),
            'callbackurl' => resource_path('views/callback.blade.php'),
            'test' => 1,
        );

        WebToPay::redirectToPayment(array_merge(
            $post,
            $config,
            $order
        ));
    }
}
