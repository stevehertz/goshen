<?php

namespace App\Services;

use GuzzleHttp\Client;

class DarajaService
{
    private $consumerKey;
    private $consumerSecret;
    private $env;
    private $client;

    public function __construct()
    {
        $this->consumerKey = config('services.safaricom.consumer_key');
        $this->consumerSecret = config('services.safaricom.consumer_secret');
        $this->env = config('services.safaricom.env');
        $this->client = new Client();
    }

    public function authenticate()
    {
        $url = $this->env === 'sandbox'
            ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
            : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $response = $this->client->request('GET', $url, [
            'auth' => [
                $this->consumerKey,
                $this->consumerSecret
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['access_token'] ?? null;
    }

    public function stkPush($phoneNumber, $amount, $accountReference, $transactionDesc)
    {
        $accessToken = $this->authenticate();
        // $this->printr($accessToken);

        $url = $this->env === 'sandbox'
            ? 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest'
            : 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $timestamp = now()->format('YmdHis');
        $password = base64_encode(config('services.safaricom.shortcode') . config('services.safaricom.passkey') . $timestamp);

        $data = [
            'BusinessShortCode' => config('services.safaricom.shortcode'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerBuyGoodsOnline',
            'Amount' => $amount,
            'PartyA' => $phoneNumber,
            'PartyB' => '606472',
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => config('services.safaricom.callback_url'),
            'AccountReference' => $accountReference,
            'TransactionDesc' => $transactionDesc,
        ];

        // $this->printr($data);

        $response = $this->client->post($url, [
            'headers' => [
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ]);

        $this->printr($response);
        // die();

        return $response;
    }

    public function registerUrl()
    {
        $accessToken = $this->authenticate();

        $url = $this->env === 'sandbox'
            ? 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl'
            : 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $data = [
            'ShortCode' => config('services.safaricom.shortcode'),
            'ResponseType' => 'Completed',
            'ConfirmationURL' => 'https://goshen.co.ke/confirmation',
            'ValidationURL' => 'https://goshen.co.ke/validation', // Adjust as needed
        ];

        $response = $this->client->post($url, [
            'headers' => [
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    private function printr($var) {
        echo "<pre>". print_r($var, 1)."</pre>";
    }
}
