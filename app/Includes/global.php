<?php

$GLOBALS['APP_URL'] = 'https://g.codefresh.io';

if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    if ($_ENV['PANTHEON_ENVIRONMENT'] === 'live') {
        $GLOBALS['APP_URL'] = 'https://g.codefresh.io';
    } else {
        $GLOBALS['APP_URL'] = 'https://sec.codefresh.io';
    }
}

$GLOBALS['APP_URL_LOGIN']          = $GLOBALS['APP_URL'] . '/login';
$GLOBALS['APP_URL_AUTH_GITHUB']    = $GLOBALS['APP_URL'] . '/api/auth/github';
$GLOBALS['APP_URL_AUTH_BITBUCKET'] = $GLOBALS['APP_URL'] . '/api/auth/bitbucket';
$GLOBALS['APP_URL_AUTH_GITLAB']    = $GLOBALS['APP_URL'] . '/api/auth/gitlab';
$GLOBALS['APP_URL_AUTH_GOOGLE']    = $GLOBALS['APP_URL'] . '/api/auth/google';
$GLOBALS['APP_URL_AUTH_AZURE']     = $GLOBALS['APP_URL'] . '/api/auth/azure';
$GLOBALS['TWILIO_NUMBER']          = '+18176970385';
