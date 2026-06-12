<?php

return [
    'COMPANY_CODE' => 'CDNXAI1234',
    'uat_mobile_numbers' => array_filter(explode(',', env('UAT_MOBILE_NUMBERS', ''))),
    'LA_OFFER_1' => 'la-offer-1',
    'LA_OFFER_2' => 'la-offer-2',
    'LA_OFFER_3' => 'la-offer-3',
    'LA_OFFER_4' => 'la-offer-4',
    'LA_OFFER_5' => 'la-offer-5',
    'LA_OFFER_6' => 'la-offer-6',
    'SA_OFFER_1' => 'sa-offer-1',
    'SA_OFFER_2' => 'sa-offer-2',
    'SA_OFFER_3' => 'sa-offer-3',
    'SA_OFFER_4' => 'sa-offer-4',
    'SA_OFFER_5' => 'sa-offer-5',
    'SA_OFFER_6' => 'sa-offer-6',
    'SA_OFFER_7' => 'sa-offer-7',
    
    'SABPAISA_AUTH_KEY' => env('SABPAISA_AUTH_KEY'),
    'SABPAISA_AUTH_IV' => env('SABPAISA_AUTH_IV'),
    'SABPAISA_CLIENT_CODE' => env('SABPAISA_CLIENT_CODE'),
    'SABPAISA_USERNAME' => env('SABPAISA_USERNAME'),
    'SABPAISA_PASSWORD' => env('SABPAISA_PASSWORD'),
    'SABPAISA_MODE' => env('SABPAISA_MODE'),
    'BREVO_API_KEY' =>env('BREVO_API_KEY'),

    'SABPAISA_API_KEY' => env('SABPAISA_API_KEY'),
    'SABPAISA_SECRET_KEY' => env('SABPAISA_SECRET_KEY'),
    'SABPAISA_MERCHANT_ID' => env('SABPAISA_MERCHANT_ID'),
];
