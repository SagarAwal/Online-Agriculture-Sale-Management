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
    <title>Login</title>
</head>
<body class="category-page">   
	<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="<?php echo base_url();?>assets/images/phone.png" />+977-9843661481</a>
                <a href="#"><img alt="email" src="<?php echo base_url();?>assets/images/email.png" />Contact us today!</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
				
                <a class="current-open"  aria-haspopup="true" aria-expanded="false" href="<?php echo base_url();?>user/selectProducts"><span>Back</span></a>
                </div>
            </div>
        </div>
		</div>
 
	</div>
				
				<div class="col-sm-6">
               
			   <form action="<?php echo base_url();?>user/updateProfile/" method="post">
                    <div class="box-authentication">
                 <?php
				 foreach ($data as $row){
					 ?>
                        <h3>Update an account</h3>
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <label for="fname">Firstname</label>
                        <input id="fname" name="fname" type="text" class="form-control" value="<?php echo $row->fname; ?>">
                        <label for="lname">lasttname</label>
                        <input id="lname" name="lname" type="text" class="form-control" value="<?php echo $row->lname; ?>">
                        <label for="uname">Username</label>
                        <input id="uname" name="uname" type="text" class="form-control" value="<?php echo $row->username; ?>">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control" value="<?php echo $row->password; ?>">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" class="form-control"  value="<?php echo $row->email; ?>">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" class="form-control" value="<?php echo $row->address; ?>">
                        <label for="contact">Contact No</label>
                        <input id="contact" name="contact" type="text" class="form-control" value="<?php echo $row->contact; ?>">
                        <button type="submit" class="button" href="<?php echo base_url();?>user/updateProfile">
                        <i class="fa fa-user"></i> Update account</button>  
<?php
				 }?>						
                        </div>
                </form>
				
				</div>