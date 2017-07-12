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
				<a href="<?php echo base_url()?>Welcome/addproduct/">Add Products</a>
				<a href="<?php echo base_url()?>Admin/getProduct/">Edit Products</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
				<a href="<?php echo base_url();?>user/selectForEdit1/"><span>Profile</span></a>
				<a aria-haspopup="true" aria-expanded="false" href="<?php echo site_url('user/Logout')?>"><span>Logout</span></a>
                
				</div>
            </div>
			

        </div>
    </div>
    <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th>cart_id</th>
                            <th>user_id</th>
                            <th>vegetable_name</th>
							<th>cost</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php 
						foreach ($orderlist as $row){
					?>
					
                        <tr>
                             <td class="price"><span><?php echo $row->cart_id; ?> </span></td>
                            <td class="price"><span><?php echo $row->user_id; ?> </span></td>

                             <td class="cart_product"><span><?php echo $row->vegetable_name; ?> </span></td>
                            <td class="price"><span><?php echo $row->unit_cost; ?> </span></td>
                            
                            
                            </td>
                        </tr>
                        <?php
						}
						?>
                    </tbody>
                     
                </table>
 
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
