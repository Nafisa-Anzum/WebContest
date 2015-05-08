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

    <div class="form-panel">
        <?php
            echo form_open('Welcome/addCard',array('class' => 'form-horizontal style-form'));

            $inputType=array('name'=>'inputType', 'id'=>'inputType', 'type'=>'text','class'=>'form-control', 'placeholder'=>'Card type');
            $inputName=array('name'=>'inputName', 'id'=>'inputName', 'type'=>'number','class'=>'form-control', 'placeholder'=>'Card holder name');
            $inputPAN=array('name'=>'inputPAN', 'id'=>'inputAddress', 'type'=>'text','class'=>'form-control', 'placeholder'=>'PAN');
            $inputExpiry=array('name'=>'inputExpiry', 'id'=>'inputExpiry', 'type'=>'date','class'=>'form-control', 'placeholder'=>'Expiry date');
            $inputCvc=array('name'=>'inputCvc', 'id'=>'inputCvc', 'type'=>'number','class'=>'form-control', 'placeholder'=>'Card verification number');
            echo "
                <fieldset>
                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputType)."
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputName)."
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputPAN)."
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputExpiry)."
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-lg-10\">
                        ".form_input($inputCvc)."
                    </div>
                </div>
                
       
            </fieldset>

          ";
        ?>

        <?php echo form_close(); ?>

    </div>


      </div>

      <script type="text/javascript">
            document.getElementById('submitAcc').onclick=function(){
                alert("Account created");
                window.history.back();
            };
            document.getElementById('cancelAcc').onclick=function(){
                
                window.history.back();
            };

      </script>


    <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  </body>
</html>