<?php

use App\Models\User;

if (!session_id()) {
    session_start();
}

$fb = new Facebook\Facebook([
    'app_id' => '707826892725027', // Replace {app-id} with your app id
    'app_secret' => '07cc6964c692ad4663867d54f96a0c36',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string)$accessToken;

    //OAuth 2.0
    $oAuth2Client = $fb->getOAuth2Client();

    //
    $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
    $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);


}

try {
    $response = $fb->get('/me?fields=id,first_name,last_name');
//    $requestUserName = $fb->request('GET', '/me?fields=id,name');
    $userNode = $response->getGraphUser();
//    $userNode = $requestUserName->getGraphUser();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error:' . $e->getMessage();
    unset($_SESSION['facebook_access_token']);
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error:' . $e->getMessage();
    exit;
}

$first_name = $userNode->getFirstName();
$last_name = $userNode->getLastName();





if( $_SESSION['facebook_access_token'] ) {
    $user = new User($first_name, $last_name);
    $newUserID = $user->create();
    $user->userID = $newUserID;
    $_SESSION['userDetails'] = $user;

}

header('Location: /');











