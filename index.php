<?php
  require_once "Auth.php";
  $title = 'Home';  
  $options = array(
  'dsn' => 'mysql://admin39halFD:Fdnv72D2mZjX@localhost/app1',
  'table' => 'users',
  'usernamecol' => 'username',
  'passwordcol' => 'password',
  'cryptType' => 'sha1',
  'db_fields' => '*',
  'advancedsecurity' => 'true'
  );
  $a = new Auth("DB", $options, "loginFunction", $optional);
  $a->start();
  function loginFunction() { 
      // show login page 
  } 
  function loginSuccess($username, $a) { 
      // write successful login to log 
  } 
  function loginFailed($username, $a) { 
      // write failed login to log 
  } 
  
  //$a->setLoginCallback('loginSuccess'); 
  //$a->setFailedLoginCallback('loginFailed'); 
  
  include 'includes/head.php';
  
  include 'includes/header.php';
  include 'includes/standard-top.php';
?>
  
  <h1>This is my homepage</h1>
  <h2>Welcome.</h2>
  <h3>We are glad you visited.</h3>
  <h4>Please check back soon!</h4>
  <p>This is what I am saying.</p>
  <h1>This is my homepage</h1>
  <h2>Welcome.</h2>
  <h3>We are glad you visited.</h3>
  <h4>Please check back soon!</h4>
  <h1>This is my homepage</h1>
  <h2>Welcome.</h2>
  <h3>We are glad you visited.</h3>
  <h4>Please check back soon!</h4>
  <h1>This is my homepage</h1>
  <h2>Welcome.</h2>
  <h3>We are glad you visited.</h3>
  <h4>Please check back soon!</h4>
<?php
  if ($a->getAuth()) {
    echo "One can only see this if he is logged in!";
  }
  include 'includes/standard-bottom.php';
  include 'includes/footer.php';
?>
