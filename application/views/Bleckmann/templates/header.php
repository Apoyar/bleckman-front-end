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
	
	<!-- Bootstrap table-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>    
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>

    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
  	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">	
	  <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>	
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript">
      $.material.init();
      <?php echo 'var API_BASE_URL_FE="'.API_BASE_URL_FE.'";';?>
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>js/scriptBleckmann.js"></script>
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
	<!--Added Admin Global Menu -->
<div class='container-fluid form1'>
  <div class='row'>
    <div class='col-xs-12 col-md-3' height='100%'>
      <div class='well' style="border-bottom: 15px solid #22B8AA; padding-bottom: 40px;">
        <div class='row'>
          <div class='col-md-12 text-center' >
            
          </div>
          <a href='<?php echo base_url()?>index.php/Bleckmann/customers'>

          <div  <?php if($this->uri->segment(2) == 'customers'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-8.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Customers</span>
          </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/warehouses'>
            <div  <?php if($this->uri->segment(2) == 'warehouses'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-2.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Warehouses</span>
            </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/users'>
          <div  <?php if($this->uri->segment(2) == 'users'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-7.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Users</span>
          </div>
          </a><!--
		  <a href='<?php echo base_url()?>index.php/Bleckmann/carriers'>
          <div  <?php if($this->uri->segment(2) == 'carriers'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-6.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Carriers</span>
          </div>           
          </a>-->          
          <a href='<?php echo base_url()?>index.php/Bleckmann/roles'>
            <div  <?php if($this->uri->segment(2) == 'roles'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-2.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Roles</span>
            </div>
          </a>
        </div>
      </div>

    </div>	