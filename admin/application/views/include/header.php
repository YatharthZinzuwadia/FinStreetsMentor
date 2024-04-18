<?php
if (empty($this->session->user_data)) {
    redirect('login/index');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVATIVE SOLUTION</title>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/local.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https: //cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https: //cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css" />

    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>


</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>dashboard"><b style="color:lime;font-size: larger">INNOVATIVE</b> SOLUTION</a>
            </div>
<?php
if ($this->session->userdata('user_data')['role_id'] == 1):
?>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><?php if ($slug == 'dashboard'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>dashboard"><i class="fa fa-bullseye"></i> Dashboard</a></li><br>
                    <li><?php if ($slug == 'manage-roles'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>manageroles"><i class="fa fa-bullseye"></i> Manage Roles</a></li><br>
                    <li><?php if ($slug == 'manage-mentor'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>managementor"><i class="fa fa-bullseye"></i> Manage-Mentor</a></li><br>
                    <li><?php if ($slug == 'manage-student'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>managestudent"><i class="fa fa-bullseye"></i>Manage Student</a></li><br>
                    <li><?php if ($slug == 'manage-city'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>managecity"><i class="fa fa-bullseye"></i> Manage City</a></li><br>
                    <li><?php if ($slug == 'Manage-state'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>managestate"><i class="fa fa-bullseye"></i> Manage State</a></li><br>
                    <li><?php if ($slug == 'manage-complaints'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>managecomplaints"><i class="fa fa-bullseye"></i> Manage-Complaints</a></li><br>
                    <li><?php if ($slug == 'manage-payment'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>payments/index"><i class="fa fa-bullseye"></i> Manage-payment</a></li><br>
                    <!-- <li><?php if ($slug == 'chat'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>chat"><i class="fa fa-bullseye"></i> Messages</a></li><br> -->
                    <li><?php if ($slug == 'manage-slider-image'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>slider/"><i class="fa fa-bullseye"></i> Slider Image</a></li><br>
                    <li><?php if ($slug == 'manage-course'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>course/"><i class="fa fa-bullseye"></i> Course</a></li><br>
                    <li><?php if ($slug == 'manage-material'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>material/"><i class="fa fa-bullseye"></i> Material</a></li><br>
                    <li><?php if ($slug == 'logout'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>login/logout"><i class="fa fa-bullseye"></i> Logout</a></li><br>

                </ul>
            </div>
            <?php endif;?>
            <?php
if ($this->session->userdata('user_data')['role_id'] == 2):
?>
   <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><?php if ($slug == 'dashboard'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>dashboard"><i class="fa fa-bullseye"></i> Dashboard</a></li><br>
                    <li><?php if ($slug == 'profile'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>profile"><i class="fa fa-bullseye"></i>My Profile</a></li><br>
					<li><?php if ($slug == 'manage-material'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>material/"><i class="fa fa-bullseye"></i> Material</a></li><br>
					<li><?php if ($slug == 'sold-material'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>material/sold"><i class="fa fa-bullseye"></i> Manage Payments</a></li><br>
                    <li><?php if ($slug == 'chat'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>chat/getalluser/"><i class="fa fa-bullseye"></i>Chats</a></li><br>
                    <li><?php if ($slug == 'logout'): ?><li class="selected"><?php endif;?><a href="<?=base_url();?>login/logout"><i class="fa fa-bullseye"></i> Logout</a></li><br>

                </ul>
            </div>
<?php endif;?>
        </nav>
