<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css" />
    
    <title>Edit product</title>
</head>
<body class="home">

<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
				<a href="#">Delivery in KTM Valley</a>
                <a class="first-item" href="#"><img alt="phone" src="<?php echo base_url();?>assets/images/phone.png" />+977-9843661481</a>
                <a href="#"><img alt="email" src="<?php echo base_url();?>assets/images/email.png" />Contact us today!</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
				<a href="<?php echo base_url();?>user/selectForEdit/"><span>Profile</span></a>
				<a class="cart-link" href="<?php echo base_url('user/showCart');?>">
                    <span class="title">Checkout</span>
                </a>
                    <a aria-haspopup="true" aria-expanded="false" href="<?php echo site_url('user/Logout')?>"><span>Logout</span></a>
                
				</div>
            </div>
			

        </div>
    </div>
   
 
</div>

<div class="content-page">
				 <div class="col-sm-6">
                <?php echo form_open_multipart(base_url()."admin/getProduct/");?>
				<form>
                    <div class="box-authentication">
					<?php
				 foreach ($data as $row){
					 ?>
                        <h3>edit Product</h3>
						<input id="vegetable_id" name="vegetable_id" type="hidden" value="<?php echo $row->vegetable_id;?>">
                        <label for="vegetable_name">Vegetable Name</label>
                        <input id="vegetable_name" name="vegetable_name" type="text" class="form-control" value="<?php echo $row->vegetable_name; ?>">
                        <label for="unit_cost">Unit Cost</label>
                        <input id="unit_cost" name="unit_cost" type="number" class="form-control" value="<?php echo $row->unit_cost; ?>">
                        
                        <button type="submit" class="button" href="<?php echo base_url();?>admin/getProduct/">
                        <i class="fa fa-user"></i> edit Product</button>  
					<?php
					 }
					 ?>
                        </div>
                </form>
</div>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/theme-script.js"></script>

</body>
</html>