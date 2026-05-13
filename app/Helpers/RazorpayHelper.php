<?php

use Illuminate\Support\Facades\Log;

if(!function_exists('generateRazorpayOrder')){
    function generateRazorpayOrder($data){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.razorpay.com/v1/orders",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_USERPWD => config('services.razorpay.key') . ':' . config('services.razorpay.secret'),
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>  json_encode($data),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "accept: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        Log::info("response : " . $response);
        $err = curl_error($curl);
        Log::info("err : " . $err);

        curl_close($curl);

        return json_decode($response);
    }
}
