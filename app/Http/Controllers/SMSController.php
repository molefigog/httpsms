<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SMSController extends Controller
{
    public function sendSMSForm()
    {
        return view('sms-form');
    }

    public function sendSMS(Request $request)
    {
        $apiKey = ('Get API Key from https://httpsms.com/settings');

        $payload = [
            'content' => $request->input('content'),
            'from' => $request->input('from'),
            'to' => $request->input('to')
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'x-api-key' => $apiKey,
        ])->post('https://api.httpsms.com/v1/messages/send', $payload);

        return view('sms-result', ['response' => $response->body()]);
    }
}
