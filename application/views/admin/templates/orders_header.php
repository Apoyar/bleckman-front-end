<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!--JQuery-->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-2.2.4.min.js"></script>
    
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!--Bootstrap material-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-material/css/bootstrap-material-design.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-material/css/ripples.min.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap-material/js/material.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap-material/js/ripples.min.js"></script>
    
    <!-- Latest compiled and minified CSS-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    
    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
    
    <script>
      <?php echo 'var API_BASE_URL_FE="'.API_BASE_URL_FE.'";';?>
      <?php echo 'var apoyarToken="'.$_SESSION['Apoyar'].'";';?>
      <?php echo 'var customerId="'.$_SESSION['Customerid'].'";';?>
      //console.log(" in orders_header, token : " + apoyarToken);
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>js/scriptadmin.js"></script>
  </head>
  <body id='override'>
    <div class="bm-h">
      <img src="<?php echo base_url();?>img/logo.png">
    </div>
    
    <div class='bm-spacer'>
      
    </div>
    
    <div class='loading-screen'>
      <div style='height: 40vh'></div>
      <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
      <br>
      <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
      </center>
    </div>
