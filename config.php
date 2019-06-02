<?php

session_start();

require_once "vendor/autoload.php";

// create GoogleClient object which will communicate with Google API
$client = new Google_Client();

// to get clientId, clientSecret, redirect uri and application name we need to:
//  - have account on GCP
//  - create project on GCP and enable Google API for it
//  - go to API & Services -> Credentials
//  - create new Credentials for the created project by selecting "Oauth2 client ID"
//  - follow the instructions (pay attention to authorize your domain before setting callback URI)
//  - choose application type (Web application), set app name and URL for callback script (where Google will send data after user logs in with Google account)
//  - collect neccessary info after process is finished (id, secret, app name, redirect uri) and set here

$client->setClientId("1013593684828-gvip336ciivu3jl8r2i8qepu76haumne.apps.googleusercontent.com");
$client->setClientSecret("n1k-3IyQ8pII7ApbDNjIjVmw");
$client->setApplicationName("oauthdemo");
$client->setRedirectUri("http://oauthgoogle.192.168.0.101.xip.io:8887/callback.php"); // my MAMP project url

// more about scopes here https://developers.google.com/identity/protocols/googlescopes
$client->addScope("https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile");