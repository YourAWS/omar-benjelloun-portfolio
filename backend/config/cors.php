<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    // For development, allow any origin. In production, replace with your frontend URL(s)
    'allowed_origins' => [
        'https://omarbenjelloun.com',
        'https://www.omarbenjelloun.com',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];
