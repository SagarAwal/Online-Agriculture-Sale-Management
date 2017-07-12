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
    
    <title>Home</title>
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
                    <a aria-haspopup="true" aria-expanded="false" onclick="return confirm('Do you want to LogOut?')" href="<?php echo site_url('user/Logout')?>"><span>Logout</span></a>
                
				</div>
            </div>
			

        </div>
    </div>
   
 
</div>

<div class="content-page">
    <div class="tab-panel active" id="tab-4">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>

									
									
                                  <?php
                                  foreach($productlist as $row){
                                  ?>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="<?php echo base_url();?>assets/images/vegetable/<?php echo $row->vegetable_image;?>" /></a>
                                            
                                            <div class="add-to-cart">
												<?php echo anchor("user/addToCart/{$row->vegetable_id}", 'Add To Cart'); ?>
											</div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#"><?php echo $row->vegetable_name; ?></a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">Rs.<?php echo $row->unit_cost; ?></span>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <?php
                                }
                                 ?>   
                                </ul>
                            </div>
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