<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-QAdi7HQouHzrMcg66qFdsKV2BCFW/iVhCRvooAkqS4d5rXV8Hlu+X8MY3ao03fgn" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<div id="login">

    <div class="jumbotron">


    <?php

    //process login form if submitted
    if(isset($_POST['submit'])){

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if($user->login($username,$password)){ 

            //logged in return to index page
            header('Location: index.php');
            exit;
        

        } else {
            $message = '<p class="error">Wrong username or password</p>';
        }

    }//end if submit

    if(isset($message)){ echo $message; }
    ?>

    <form action="" method="post">
    <p><label>Username</label><input type="text" name="username" value=""  /></p>
    <p><label>Password</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="submit" value="Login"  /></p>
    </form>

</div>
</div>
</body>
</html>