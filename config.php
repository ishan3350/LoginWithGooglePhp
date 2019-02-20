<?php
session_start();
require("google-api/vendor/autoload.php");
$google_client = new Google_Client();
$google_client->setClientId("Your Client ID");
$google_client->setClientSecret("Your Client Secret");
$google_client->setApplicationName("Your Application Name");
$google_client->setRedirectUri("http://localhost/google_login/g-callback.php");
$google_client->addScope("https://www.googleapis.com/auth/userinfo.email");





?>
