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
    
    <title>Order</title>
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="<?php echo base_url();?>assets/images/phone.png" />+977-9843661481</a>
                <a href="#"><img alt="email" src="<?php echo base_url();?>assets/images/email.png" />Contact us today!</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
				<a href="<?php echo base_url();?>user/selectForEdit/"><span>Profile</span></a>
                <a class="current-open"  aria-haspopup="true" aria-expanded="false" href="<?php echo base_url();?>user/selectProducts"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
 
</div>
<!-- end header -->
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            
            <div class="heading-counter warning">Your shopping cart contains:
            </div>
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Unit price(Rs)</th>
                            <th>Qty(Kg)</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php 
						foreach ($data as $row){
					?>
					
                        <tr>
                            
                            
                            <td class="cart_product"><span><?php echo $row->vegetable_name; ?> </span></td>
                            <td class="price"><span><?php echo $row->unit_cost; ?> </span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="text" value="1">
                               
                            </td>
                            
                            <td class="action"  onclick="return confirm('Do you want to cancel order?')">
				<?php echo anchor("user/deleteProduct/{$row->cart_id}", 'Delete Product'); ?>
                            </td>
                        </tr>
                        <?php
						}
						?>
                    </tbody>
                     
                </table>
				
                
            </div>
        </div>
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

<script type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.actual.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/theme-script.js"></script>

</body>
</html>