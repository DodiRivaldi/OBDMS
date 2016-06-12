<?php if(empty($active)) $active = 0; ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_2.1/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Dec 2015 15:58:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('website/img/favicon.png'); ?>">

        <title>ODBMS</title>

        <!-- Google-Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'> -->

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-reset.css'); ?>" rel="stylesheet">

        <!--Animation css-->
        <link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/assets/ionicon/css/ionicons.min.css'); ?>" rel="stylesheet" />

        <link href="<?php echo base_url('assets/assets/timepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" />

        <!-- sweet alerts -->
        <link href="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/assets/notifications/notification.css'); ?>" rel="stylesheet" />
        
        <link href="<?php echo base_url('assets/assets/modal-effect/css/component.css'); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/helper.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" />


        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<![endif]-->


    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="<?php echo site_url('user'); ?>" class="logo-expanded">
                    <img src="<?php echo base_url('website/img/favicon.png'); ?>" alt="logo">
                    <span class="nav-label">ODBMS</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="<?php if($active==1) echo 'active'; ?>"><a href="<?php echo site_url('user'); ?>"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a> </li>
                    <li class="<?php if($active==2) echo 'active'; ?>"><a href="<?php echo site_url('user/search'); ?>"><i class="fa fa-search" aria-hidden="true"></i> <span class="nav-label">Search</span></a> </li>
                    <?php if($this->utype == 3) { ?>
                    <li class="<?php if($active==3) echo 'active'; ?>"><a href="<?php echo site_url('user/members'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label">Members</span></a> </li>
                    <?php } ?>
                    <?php if($this->utype == 1) { ?>
                    <li class="<?php if($active==4) echo 'active'; ?>"><a href="<?php echo site_url('user/users'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label">Users</span></a> </li>
                    <li class="<?php if($active==5) echo 'active'; ?>"><a href="<?php echo site_url('user/organizations'); ?>"><i class="fa fa-sitemap" aria-hidden="true"></i> <span class="nav-label">Organizations</span></a> </li>
                    <li class="<?php if($active==6) echo 'active'; ?>"><a href="<?php echo site_url('user/contact_us'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="nav-label">Contact Us</span></a> </li>
                    <?php } ?>

                    
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <!-- <input type="text" placeholder="Search..." class="form-control"> -->
                  <select data-url="<?php echo site_url('user/search') ?>" class="form-control drp_search_bg" style="width:200px">
                      <option value="">Search...</option>
                      <?php
                      $CI =& get_instance();
                      $blood_groups = $CI->blood_groups();
                      foreach ($blood_groups as $key => $blood_group) {
                          $selected = "";
                          if(!empty($group)) if($blood_group->id == $group) $selected = "selected='selected'";
                          echo "<option $selected value='".$blood_group->id."'>".$blood_group->name."</option>";
                      }
                      ?>
                  </select>
                </form>
                
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <!-- <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="<?php echo base_url('assets/img/avatar-2.jpg'); ?>" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="<?php echo base_url('assets/img/avatar-3.jpg'); ?>" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="<?php echo base_url('assets/img/avatar-4.jpg'); ?>" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li> -->
                    <!-- /messages -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo $this->uimg; ?>" class="img-circle profile-img thumb-sm">
                            <span class="username"><?php echo $this->uname; ?> </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="<?php echo site_url('user/profile'); ?>"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <?php if($this->utype != 3) { ?>
                            <li><a href="javascript:;" class="md-trigger" data-modal="md-blood-donated"><i class="fa fa-tint text-red"></i> Blood Donated</a></li>
                            <?php } ?>
                            <li><a href="<?php echo site_url('user/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>

            <div class="md-modal md-effect-1" id="md-blood-donated">
                <div class="md-content md-blood-donated-con">
                    <h2><span class="text-red">Bood</span> Donated</h2>
                    <hr class="no-margin">
                    <div class="row">
                        <form action="<?php echo site_url('user/blood_donated'); ?>" method="post">
                            <p class="text-center">I donated Blood</p>
                            <div class="col-sm-8 col-sm-offset-2">
                                <input type="text" name="date" class="form-control datepicker text-center" value="<?php echo date('d-m-Y'); ?>">
                            </div>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <div class="col-md-12">
                                <button class="md-close btn-sm btn-purple">Cancel</button>
                                <button type="submit" class="md-close btn-sm btn-primary pull-right">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>


            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            
            <!-- Page Content Ends -->
            <!-- ================== -->

            