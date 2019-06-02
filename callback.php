<?php

require_once "config.php";

// check if code is set in url (if script is called from Google)
if (isset($_GET['code'])) {
    // get token by providing code which Google gave us
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    // with this token we can ensure that logged user makes request by setting it into session and sending the same token with each user request
    $_SESSION['access_token'] = $token;

    // fetch logged in user data
    $oAuth = new Google_Service_Oauth2($client);
    $userData = $oAuth->userinfo_v2_me->get();

    // and do whatever you want   // Note: access token is valid for 1 hour (use refresh token to continue the session)
    var_dump($userData);  // or redirect somewhere
}