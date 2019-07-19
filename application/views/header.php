<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<!--<link rel="stylesheet" href="<?php echo base_url('assets/css/charts/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/charts/chart.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/charts/xcharts.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/daterangepicker.css')?>"> 
	<script type="text/javascript" src="<?php echo assets_url('assets/js/moment.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo assets_url('assets/js/jquery-3.3.1.js');?>"></script>
	<script type="text/javascript" src="<?php echo assets_url('assets/js/jquery-migrate-1.2.1.js');?>"></script>
	<script type="text/javascript" src="<?php echo assets_url('assets/js/jquery-ui-1.10.3-custom.min.js');?>"></script> 
	<script type='text/javascript' src="<?php echo assets_url('assets/js/charts/xcharts.min.js');?>"></script>
	<script type='text/javascript' src="<?php echo assets_url('assets/js/charts/script.js');?>"></script>
	<script type='text/javascript' src="<?php echo assets_url('assets/js/daterangepicker.js');?>"></script>-->
	<meta charset="utf-8">
	<title>UNEP Project Manager</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datepicker.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/morris.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/highcharts.css')?>">
	<link href="<?php echo base_url('assets/img/favicon.png')?>" rel="shortcut icon" type="image/x-icon" />
	<script type='text/javascript' src="<?php echo assets_url('assets/js/raphael-min.js');?>"></script>
	<script type='text/javascript' src="<?php echo assets_url('assets/js/morris.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/datatables.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
	<script>
			$(document).ready(function(){
				var date_input=$('input[name="dates_from_gcf"]');
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				var options={
					format: 'yyyy/mm/dd',
					container: container,
					todayHighlight: true,
					autoclose: true,
				};
				date_input.datepicker(options);
			})
	</script>
	<script>
			$(document).ready(function(){
				var date_input=$('input[name="start_date"]');
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				var options={
					format: 'yyyy/mm/dd',
					container: container,
					todayHighlight: true,
					autoclose: true,
				};
				date_input.datepicker(options);
			})
	</script>
	<script>
			$(document).ready(function(){
				var date_input=$('input[name="end_date"]');
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				var options={
					format: 'yyyy/mm/dd',
					container: container,
					todayHighlight: true,
					autoclose: true,
				};
				date_input.datepicker(options);
			})
	</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
  <a class="navbar-brand" href="<?php echo base_url()?>">UNEP Project Manager</a>
</nav>