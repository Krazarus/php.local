<?php
if (!session_id()) {
    session_start();
}

$fb = new \App\Services\FacebookAPI();

$helper = $fb->client->getRedirectLoginHelper();

$permissions = ['public_profile']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://php.local/login-callback', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

