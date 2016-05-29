<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_2.1/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Dec 2015 16:00:18 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon_1.ico'); ?>">

        <title>Velonic - Responsive Admin Dashboard Template</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>


        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-reset.css'); ?>" rel="stylesheet">

        <!--Animation css-->
        <link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/assets/ionicon/css/ionicons.min.css'); ?>" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/assets/morris/morris.css'); ?>">
        <link href="<?php echo base_url('assets/assets/timepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" />


        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/helper.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>
<?php 
$msg = $this->session->flashdata('msg'); 
if(!empty($msg)) { ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $msg; ?>
</div>
<?php 
} 

$err = $this->session->flashdata('err'); 
if(!empty($err)) { ?>
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <?php echo $err; ?>
</div>
<?php } ?>