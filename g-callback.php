<?php
require("config.php");
if(isset($_SESSION["access_token"]))
{
  $google_client->setAccessToken($_SESSION["access_token"]);


}
else if(isset($_GET["code"]))
{
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

  $_SESSION["access_token"] = $token;

}
else {
  header("location:login.php");
  exit();
}

$oAuth = new Google_Service_Oauth2($google_client);

$userData  = $oAuth->userinfo_v2_me->get();

$userData = json_encode($userData);

$userData = json_decode($userData,true);

$email = $userData["email"];

$familyName = $userData["familyName"];

$givenName = $userData["givenName"];

$picture = $userData["picture"];

echo $email;

echo $familyName;

echo $givenName;

echo $picture;

 ?>
