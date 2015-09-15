<?php
require_once "Auth.php";
$title = 'Home';  
$options = array(
'dsn' => 'mysql://adminnJQ7f1t:rndE8Y5Pc17b@localhost/app1',
'table' => 'users',
'usernamecol' => 'username',
'passwordcol' => 'password',
'cryptType' => 'sha1',
'db_fields' => '*',
'advancedsecurity' => 'true'
);
$a = new Auth("DB", $options, "loginFunction", $optional);
$a->setLoginCallback('loginCallback');
$a->setLogoutCallback('logoutCallback');
$auth->addUser('rhroyston', 'nic0tine');
$a->start();
function loginFunction() { 
    // show login page 
} 
function loginCallback($username, $a) { 
    header("Location: http://app1-rhroyston.rhcloud.com");
    die();
}
function logoutCallback($username, $a) { 
    header("Location: http://app1-rhroyston.rhcloud.com");
    die();
}
function loginSuccess($username, $a) { 
    // write successful login to log 
} 
function loginFailed($username, $a) { 
    // write failed login to log 
}

include 'includes/head.php';
?>
<html lang="en">
    <body>
        <!-- Uses a header that scrolls with the text, rather than staying locked at the top -->
        <div class="mdl-layout mdl-js-layout">
            <main class="mdl-layout__content">
                <div class="page-content">
                    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                        <div class="mdl-tabs__tab-bar">
                            <a href="#login-panel" class="mdl-tabs__tab is-active">Log In</a>
                            <a href="#register-panel" class="mdl-tabs__tab">Register</a>
                            <a href="" class="mdl-tabs__tab" id="home">Home</a>
                        </div>
                        <div class="mdl-tabs__panel is-active" id="login-panel">
                            <br>
                            <?php 
                                include 'includes/logincard.php';
                                if ($a->getAuth()) {
                                    echo "Private Info";
                                }
                            ?>
                        </div>
                        <div class="mdl-tabs__panel" id="register-panel">
                            <br>
                            <?php include 'includes/registrationcard.php';?>
                        </div>
                    </div><!-- tabs -->
                </div><!-- content -->
            </main>
        </div><!-- layout -->
    </body>
</html>

