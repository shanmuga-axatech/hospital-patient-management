
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Seva Trust</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container text-center">       
          <h3 class="color-white">SAI AASHREYA</h3>
      </div>
    </nav>   

    <div class="container bg-white pad-top">

     <div class="col-md-12">  

            <div class="row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8">

                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="col-md-4">
                        <img alt="160x160" data-src="holder.js/160x160" class="img-thumbnail" />
                    </div>
                    <div class="col-md-8">
                      <h3>Name: Shanmuga Sundaram</h3>
                      <h3>Patient Id: GOOD-01</h3>

                      <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          60%
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                      <ul class="nav nav-tabs nav-justified">
                        <li role="presentation" class="active"><a href="#">Register</a></li>
                        <li role="presentation"><a href="#">Vitals</a></li>
                        <li role="presentation"><a href="#">Scans</a></li>
                        <li role="presentation"><a href="#">Notes</a></li>
                      </ul>  

                      <?php $this->load->view('form/register'); ?>


                    </div>
                </div>

                </div>

                <div class="col-md-2">&nbsp;</div>

            </div>


             
       

     </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

  </body>
</html>
