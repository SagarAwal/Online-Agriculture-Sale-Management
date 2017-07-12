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
                    <a class="current-open"  aria-haspopup="true" aria-expanded="false" href="<?php echo base_url();?>user/home"><span>Home</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    
</div>

<div class="columns-container">
    <div class="container" id="columns">

        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Authentication</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
            
                <div class="col-sm-6">
                <form action="<?php echo base_url();?>user/addUser/" method="post">
                    <div class="box-authentication">
                 
                        <h3>Create an account</h3>
                        <label for="fname">Firstname</label>
                        <input id="fname" name="fname" type="text" class="form-control">
                        <label for="lname">lasttname</label>
                        <input id="lname" name="lname" type="text" class="form-control">
                        <label for="uname">Username</label>
                        <input id="uname" name="uname" type="text" class="form-control">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" class="form-control">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" class="form-control">
                        <label for="contact">Contact No</label>
                        <input id="contact" name="contact" type="text" class="form-control">
                        <button type="submit" class="button" href="<?php echo base_url();?>user/addUser">
                        <i class="fa fa-user"></i> Create an account</button>                   
                        </div>
                </form>
                </div>
                
                <div class="col-sm-6">
                 <form action="<?php echo base_url();?>user/login/" method="post">

                    <div class="box-authentication">
                        <h3>Already registered?</h3>
                        <label for="username_login">Username</label>
                        <input id="username_login" name="username" type="text" class="form-control">
                        <label for="password_login">Password</label>
                        <input id="password_login" name="password" type="password" class="form-control">
                        <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
                        <button type="submit" class="button" href="<?php echo base_url();?>user/login/"><i class="fa fa-lock"></i> Sign in</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ./page wapper-->
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="assets/js/theme-script.js"></script>
</body>
</html>