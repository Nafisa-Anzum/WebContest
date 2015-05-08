<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add new Account</title>

    <!-- Bootstrap -->
    <?php $this->load->helper('url'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  </head>


  <body role="document">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">Project name</a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="#">Home</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#login-modal" data-toggle="modal">Log In</a></li>
          </ul>

        </div><!--/.nav-collapse -->

      </div>
    </nav>

    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div class="container" role="main">

        <form class="form-horizontal">
            <fieldset>
                <legend>Add new Account</legend>
                <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPhone" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="tel" class="form-control" id="inputPhone" placeholder="Phone number">
                        </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="inputAddress" placeholder="Address"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputBalance" class="col-lg-2 control-label">Balance</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" id="inputPhone" placeholder="Balance">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
            </fieldset>
        </form>


      </div>




    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  </body>
</html>