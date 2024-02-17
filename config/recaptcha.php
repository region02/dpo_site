<?php
return [
    'site_key' => env('RECAPTCHA_SITE_KEY', 'NULL'),
    'secret_key' => env('RECAPTCHA_SECRET_KEY', 'NULL'),
    'min_score' => env('RECAPTCHA_MIN_GOOD_SCORE', 0.3),
];
