<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '502322672784-bh2gf3rbesdrn7b23f3eelj389qlfg1o.apps.googleusercontent.com',
        'client_secret' => 'RgA3Ve4XVW-lfLLOe0u0B8c_',
        'redirect' => 'http://your-callback-url',
    ],
    'facebook' => [
        'client_id' => '1763013717301315',
        'client_secret' => '6cda30e75ca44d5554f9697efb339938',
        'redirect' => 'http://your-callback-url',
    ],

];
