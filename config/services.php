<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Mailgun, Postmark, AWS and more. This file provides the de facto
      | location for this type of information, allowing packages to have
      | a conventional file to locate the various service credentials.
      |
     */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],
    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '280929324366-p8escnigut7plaebeng093qqu3cm1l95.apps.googleusercontent.com',
        'client_secret' => 'pJLaX2y1pqhRNCJUVtKPUdHZ',
        'redirect' => 'http://demo.mubaligh.id/web/public/auth/google/callback',
    ],
    
    'facebook' => [
        'client_id' => '649443812677312',
        'client_secret' => 'a97badeb43d7d01c47ca7cba8499ca07',
        'redirect' => 'https://demo.mubaligh.id/web/public/auth/facebook/callback',
    ],
];
