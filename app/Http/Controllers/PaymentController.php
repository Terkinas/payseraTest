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

        function getSelfUrl(): string
        {
            $url = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0, strpos($_SERVER['SERVER_PROTOCOL'], '/'));

            if (isset($_SERVER['HTTPS']) === true) {
                $url .= ($_SERVER['HTTPS'] === 'on') ? 's' : '';
            }

            $url .= '://' . $_SERVER['HTTP_HOST'];

            if (isset($_SERVER['SERVER_PORT']) === true && $_SERVER['SERVER_PORT'] !== '80') {
                $url .= ':' . $_SERVER['SERVER_PORT'];
            }

            $url .= dirname($_SERVER['SCRIPT_NAME']);

            return $url;
        }

        $config = array(
            'projectid' => '230974',
            'sign_password' => '1a160afde820d564721b88b9ec1e188a',
            'accepturl' => getSelfUrl() . 'accept.php',
            'cancelurl' => getSelfUrl() . 'cancel.php',
            'callbackurl' => getSelfUrl() . 'callback.php',
            'test' => 1,
        );

        WebToPay::redirectToPayment(array_merge(
            $post,
            $config,
            $order
        ));
    }
}
