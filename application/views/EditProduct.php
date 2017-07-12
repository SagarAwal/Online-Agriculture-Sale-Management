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
    
    <title>Edit Product</title>
</head>
<body class="editproduct">

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
            <span class="page-heading-title2">Edit Product</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
            
                <div class="col-sm-6">
				
            
				<form action="<?php echo base_url();?>Admin/getProduct" method="post">	
				
				<table border="1 px solid black">
				<thead>
					<th>Vegetable Name</th>
					<th>Unit Cost</th>
					<th>Action</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php 
						foreach($list as $row):
					?>
					<tr>
					<td><?=$row->vegetable_name?></td>
					<td><?=$row->unit_cost?></td>
					
					<td><a href="<?php echo base_url();?>user/edit?vegetable_id=<?php echo $row->vegetable_id;?>">EDIT</a></td>
					<td><a onclick="return confirm('Are you sure you want to delete the data?')" href="<?php echo base_url();?>user/deleteProduct1?id=<?php echo $row->vegetable_id;?>">DELETE</a></td>
					</tr>
					<?php
						endforeach;
						?>
					</tbody>
					</table>
					</form>
				<!--<form>
                    <div class="box-authentication">
                 
                        <h3>Edit Product</h3>
						<input type="hidden" id="vegetable_id" name="vegetable_id" value="<?php echo $row->vegetable_id;?>" >
                        <label>Vegetable Name</label>
						<input type="text" id="vegetable_name" name="vegetable_name"  value="<?php echo $row->vegetable_name; ?>">
		 
						<label>Price</label>
						<input type="number" id="unit_cost" name="unit_cost" value="<?php echo $row->unit_cost; ?>" required>
						<label>image</label>
						<input type="file" id="image" name="file" value="<?php echo $row->vegetable_image; ?>"required>
          
                        
                        <button type="submit" class="button" href="<?php echo base_url();?>admin/editproduct/">
                        <i class="fa fa-user"></i>Edit Product</button>                   
                        </div>
                </form>-->
				
                </div>
                
                
            </div>
        </div>
    </div>
</div>



</body>

</html>

