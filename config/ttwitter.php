<?php

// You can find the keys here : https://apps.twitter.com/

return [
    'debug'               => function_exists('env') ? env('APP_DEBUG', false) : false,

    'API_URL'             => 'api.twitter.com',
    'UPLOAD_URL'          => 'upload.twitter.com',
    'API_VERSION'         => '1.1',
    'AUTHENTICATE_URL'    => 'https://api.twitter.com/oauth/authenticate',
    'AUTHORIZE_URL'       => 'https://api.twitter.com/oauth/authorize',
    'ACCESS_TOKEN_URL'    => 'https://api.twitter.com/oauth/access_token',
    'REQUEST_TOKEN_URL'   => 'https://api.twitter.com/oauth/request_token',
    'USE_SSL'             => true,

    'CONSUMER_KEY'        => 'k2wfBHPDfXiZSc44pQWlpyMV2',
    'CONSUMER_SECRET'     => 'UPdhDBc2x4cDEuv9xgSminR9b4VR2QshCwRSmfmBuDIGK1Memv',
    'ACCESS_TOKEN'        => function_exists('env') ? env('TWITTER_ACCESS_TOKEN', '') : '',
    'ACCESS_TOKEN_SECRET' => function_exists('env') ? env('TWITTER_ACCESS_TOKEN_SECRET', '') : '',
];
