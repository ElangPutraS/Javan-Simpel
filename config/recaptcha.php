<?php
/**
 * Copyright (c) 2017 - present
 * LaravelGoogleRecaptcha - recaptcha.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 12/9/2018
 * MIT license: https://github.com/biscolab/laravel-recaptcha/blob/master/LICENSE
 */

/**
 * To configure correctly please visit https://developers.google.com/recaptcha/docs/start
 */
return [
    'api_site_key'      => env('RECAPTCHA_SITE_KEY', ''),
    'api_secret_key'    => env('RECAPTCHA_SECRET_KEY', ''),
    'version'           => 'v2', // supported: v3|v2|invisible
    'skip_ip'           => [], // array of IP addresses - String: dotted quad format e.g.: 127.0.0.1
    'default_validation_route' => env('RECAPTCHA_DEFAULT_VALIDATION_ROUTE', 'biscolab-recaptcha/validate'),
    'default_token_parameter_name' => env('RECAPTCHA_DEFAULT_TOKEN_PARAMETER_NAME', 'token')
];
