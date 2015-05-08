<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web-Contest</title>

    <!-- Bootstrap -->
    <?php $this->load->helper('url'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  </head>


  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="./Starter Template for Bootstrap_files/Starter Template for Bootstrap.html">Project name</a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#login-modal" data-toggle="modal">Log In</a></li>
          </ul>

        </div><!--/.nav-collapse -->

      </div>
    </nav>

    <br/>
    <div class="container">
      <div class="jumbotron">
        <h1>The Infinite Loop</h1>
        <p>Log In to view information</p>
        
      </div>
    </div>

    <div class="modal" id="login-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Log in</h4>
          </div>
          <div class="modal-body">
            <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

            <div id="login-button">
            <button class="btn btn-lg btn-primary btn-block"  type="submit">Sign in</button>
            </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


    <script>
        console.log("inside script");
        document.getElementById('login-button').onclick = function() {
            alert("Signing in...");
            console.log("Signing in...");
        }​;
    </script>


    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>


  </body>
</html>