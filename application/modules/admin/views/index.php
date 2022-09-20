<!DOCTYPE html>
<html lang="en" ng-app="BlurAdmin">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>institute</title>
	<script>var SITE_URL = '<?php echo site_url() ?>';</script>
	<script>var BASE_URL = '<?php echo base_url() ?>';</script>
	
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">

  <!-- build:css({.tmp/serve,src}) styles/vendor.css -->
  <!-- bower:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ionicons.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-toastr.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/animate.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-select.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-switch.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-tagsinput.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/font-awesome.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/fullcalendar.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/leaflet.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-progress-button-styles.min.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-chart.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/chartist.min.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/morris.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ion.rangeSlider.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ion.rangeSlider.skinFlat.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/textAngular.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/xeditable.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/style.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/datatables/css/dataTables.bootstrap.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/datatables/css/jquery.dataTables.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/bower_components/datetimepicker/bootstrap-datetimepicker.min.css" >
   <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/bower_components/datetimepicker/bootstrap-datetimepicker-standalone.css" >
   <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/select2.css" >
   <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/select2-bootstrap.css" >
	
	<script src="<?php echo base_url('assets/bluradmin/minified/js/js.js')?>"></script>
	<script src="<?php echo base_url('assets/bluradmin/minified/js/modules.js')?>"></script>
   
   
  <!-- endbower -->
  <!-- endbuild -->

  <!-- build:css({.tmp/serve,src}) styles/app.css -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/app/main.css">
  <!-- endinject -->
  <!-- endbuild -->
</head>
<body>
<div class="body-bg"></div>
<main ng-if="$pageFinishedLoading" ng-class="{ 'menu-collapsed': $baSidebarService.isMenuCollapsed() }">

  <ba-sidebar></ba-sidebar>
  <page-top></page-top>

  <div class="al-main">
    <div class="al-content">
      <content-top></content-top>
      <div ui-view></div>
    </div>
  </div>

  <footer class="al-footer clearfix">
    <div class="al-footer-right">Created with <i class="ion-heart"></i></div>
    <div class="al-footer-main clearfix">
      <div class="al-copy">institute</div>
      <ul class="al-share clearfix">
        <li><i class="socicon socicon-facebook"></i></li>
        <li><i class="socicon socicon-twitter"></i></li>
        <li><i class="socicon socicon-google"></i></li>
        <li><i class="socicon socicon-github"></i></li>
      </ul>
    </div>
  </footer>

  <back-top></back-top>
</main>

<div id="preloader" ng-show="!$pageFinishedLoading">
  <div></div>
</div>

</body>
</html>