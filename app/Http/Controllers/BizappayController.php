<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BizappayController extends Controller
{
    public function create(){
        $data = [
            'apiKey'=>config('bizappay.key'),
            'category'=>config('bizappay.category'),
            'name'=>"E-QUrban",
            'amount'=>35.00,
            'payer_name'=>"ijaz Hazly",
            'payer_email'=>"contact@bizappay.my",
            'payer_phone'=>"01234567898",
            'webreturn_url'=>route('bizappay_status'),
            'callback_url'=>'1',
            'ext_reference'=>"",
            'bank_code'=>'BCBB0235'
        ];

        $url = 'https://bizappay.my/api/v3/bill/create';

        $response = Http::asForm()->post($url, $data);

        return redirect($response[0]['category']);
    }

    public function status(){
        $response = request()->all();
        return $response;
    }

    public function callBack(){
        $response = request()->all(['billCode', 'billAmount', 'billStatus', 'billTrans', 'billInvoice']);
        Log::info($response);
    }
}
