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

          
        </div><!--/.nav-collapse -->

      </div>
    </nav>
    <div><br></div>
    <div><br></div>
    <div><br></div>
    
    <div class="container"
     role="main">
      <div class ="col-lg-10">
        <a href='<?php echo site_url('Welcome/registration'); ?>' class="btn btn-primary">Add account</a>
        <a href="#" class="btn btn-primary">Add Card</a>
        <a href="#del-card-modal" data-toggle="modal" class="btn btn-primary">Delete Card</a>
        <a href="#del-acc-modal" data-toggle="modal" class="btn btn-primary">Delete Account</a>

        <div><br></div>
        <p>Search Account</p>
        <div class="form-search form-inline">
            <?php
            echo form_open('Welcome/searchRes',array('class' => 'form-horizontal style-form'));

            $inputPAN=array('name'=>'inputPAN', 'id'=>'inputPAN', 'type'=>'number','class'=>'form-control', 'placeholder'=>'Account number');

            echo "
                <fieldset>
                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputPAN)."
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-lg-10 col-lg-offset-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    </div>
                </div>
                </div>
            </fieldset>

          ";
            ?>

            <?php echo form_close(); ?>
        </div>


    </div>
    

    <div class="modal" id="del-card-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Delete Card</h4>
          </div>
          <div class="modal-body">
            <form class="form-delcard">
            
            <label for="inputpan" class="sr-only">PAN</label>
            <input type="number" id="inputpan" class="form-control" placeholder="PAN" required="" autofocus="">
            
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
          </form>
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal" id="del-acc-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Delete Account</h4>
          </div>
          <div class="modal-body">
            <form class="form-delacc">
            
            <label for="inputAid" class="sr-only">Email address</label>
            <input type="number" id="inputAid" class="form-control" placeholder="Account number" required="" autofocus="">
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
          </form>
          </div>
          
        </div>
      </div>
    </div>
    


    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>


  </body>
</html>