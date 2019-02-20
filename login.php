<?php
require("config.php");

$loginUrl =$google_client->createAuthUrl();

 ?>
<html>
    <head>
       <meta charset="utf-8">
        <title>Login with Google</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top:100px">
            <div class="row justify-content-center">
                <div class="col-md-6 col-offset-3" align="center">
                    <img src="https://www.crazyranker.io/assets/img/brand/blue.png"><br/><br/>
                    <form>
                        <input type="Email" placeholder="Enter Email" class="form-control"><br/>
                        <input type="password" placeholder="Enter Password" class="form-control"><br/>
                        <input type="submit" value="Log In" class="btn btn-primary">
                        <input type="button" value="Login in with Google" onclick="window.location='<?php echo $loginUrl; ?>'"class="btn btn-danger">

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
