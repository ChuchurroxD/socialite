<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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

    'facebook' => [
        'client_id' => '2048798565442719',
        'client_secret' => '6e0d5c585042fdcbbc5007ee463e1c3b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],

    'google' => [
        'client_id' => '100277336817-ds0d410tcdsjnfhd93u8glkb8alqr271.apps.googleusercontent.com',
        'client_secret' => 'KJJSyBbmJOzxf4wSTOEPSgiA',
        'redirect' => 'http://localhost:8000/auth/google/callback'
    ],
];
