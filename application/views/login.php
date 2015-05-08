<!DOCTYPE html>
<!-- saved from url=(0041)http://getbootstrap.com/examples/signin/? -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <?php $this->load->helper('url'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    </head>

  <body cz-shortcut-listen="true">

    <div class="container col-ls-4">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        
        <button class="btn btn-lg btn-primary btn-block" id="submit_button" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <script type="text/javascript">
      
      document.getElementById('submit_button').onclick=function(){
        email = document.getElementById('inputEmail').value;
        pass = document.getElementById('inputPassword').value;
        console.log("in script: " +email + " & " +pass);

        if(email=="a@mail.com" && pass == "123")
        {
          //go to page1.php

        }
      };
    </script>

    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  

</body></html>