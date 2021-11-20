<!doctype html>
<html lang="en">

<head>
<?php
require_once 'configs/vendor/autoload.php';
include 'configs/database.php';

#session_destroy();

// PROBLEM NEEDS TO SEND BACK TO /HTML MAIN PAGE

 
// init configuration
// PUT IN INV 
$clientID = '487483333876-vjd8mhj32ojts5eh03jdb0mqjv9gpa30.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/real/html/login.php';


// create Client Request to access Google API
$client = new Google_Client();

$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow


#print_r($google_account_info);
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Spur - A Bootstrap Admin Template</title>
</head>

<body>
    <div class="form-screen">
        <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>Content Match </span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Please sign in </div>
            <div class="card-body">
                <form action="#!">
                    
                    <div class="account-dialog-actions">
                    <?php
                    // authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
    
    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email =  $google_account_info->email;
    $name =  $google_account_info->name;
    $token = $google_account_info->id;
    
    $auth = new db;
    $auth->authme($token,$email);

    // to lazy to solve redirect problem
  

    
    


   
    // now you can use this profile info to create account in your website and make user logged in.
  } else {
    echo "<a class='btn btn-primary' href='".$client->createAuthUrl()."'>Google Login</a>";
    
  }
  


                    ?> 
                    
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>