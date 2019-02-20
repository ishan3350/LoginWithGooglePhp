<?php
require("config.php");
unset($_SESSION["access_token"]);
$google_client->revokeToken();
session_destroy();
header("location:login.php");

 ?>
