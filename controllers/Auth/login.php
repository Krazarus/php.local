<?php
if (!session_id()) {
    session_start();
}
//$fb = new Facebook\Facebook([
//    'app_id' => '707826892725027', // Replace {app-id} with your app id
//    'app_secret' => '07cc6964c692ad4663867d54f96a0c36',
//    'default_graph_version' => 'v2.2',
//]);

$fb = new \App\Services\FacebookAPI();

$helper = $fb->client->getRedirectLoginHelper();

$permissions = ['public_profile']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://php.local/login-callback', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

