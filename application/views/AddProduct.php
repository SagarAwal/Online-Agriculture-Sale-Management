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
    
    <title>Add PRoduct</title>
</head>
<body class="addproduct">

<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="<?php echo base_url();?>assets/images/phone.png" />+977-9843661481</a>
                <a href="#"><img alt="email" src="<?php echo base_url();?>assets/images/email.png" />Contact us today!</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open"  aria-haspopup="true" aria-expanded="false" href="<?php echo site_url('user/admin')?>"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
   
 
</div>

<div class="columns-container">
    <div class="container" id="columns">

        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Add Product</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
            
                <div class="col-sm-6">
                <?php echo form_open_multipart(base_url()."admin/addproduct/");?>
				<form>
                    <div class="box-authentication">
                 
                        <h3>Add Product</h3>
                        <label for="vegetable_name">Vegetable Name</label>
                        <input id="vegetable_name" name="vegetable_name" type="text" class="form-control">
                        <label for="unit_cost">Unit Cost</label>
                        <input id="unit_cost" name="unit_cost" type="number" class="form-control">
                        <label for="vegetable_image">Image</label>
                        <input id="vegetable_image" name="file" type="file" class="form-control">
                        
                        <button type="submit" class="button" href="<?php echo base_url();?>admin/addproduct/">
                        <i class="fa fa-user"></i> Add Product</button>                   
                        </div>
                </form>
                </div>
                
                
            </div>
        </div>
    </div>
</div>

</body>

</html>

