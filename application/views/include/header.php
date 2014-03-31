<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title><?php echo $title ?></title>
	<link href="<?php echo base_url('assets/css/clf.css') ?>" rel="stylesheet" type="text/css" />

	<?php if(isset($styleSheets)){ ?>
	<?foreach ($styleSheets as $css):?>
		<link href="<?php echo base_url("assets/css/{$css}") ?>" rel="stylesheet">
	<?endforeach?>
	<?php } ?>

	<link href="<?php echo base_url("assets/js/jquery-ui/css/ui-beedie/jquery-ui-1.10.4.custom.min.css") ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js') ?>"></script>

	<?php if(isset($javaScript)){ ?>
	<?foreach ($javaScript as $js):?>
		<script src="<?php echo base_url("assets/js/{$js}") ?>"></script>
	<?endforeach?>
	<?php } ?>
</head>
<body>

<div id='container'>
	<div id='page'>
		<header>
		    <section class='heading'>
		        <div class='brand-title'>
		            <a href='http://beedie.sfu.ca'>
		                <div class='branding'>
		                    <h1>Beedie School of Business</h1>
		                </div>
		            </a> 
					<div class='site-title'>
						<h2><a href='<?php echo base_url('');?>'><?php echo $siteTitle; ?></a></h2>
					</div>
				</div>
		    </section>
		</header>
		<div class='header-divider'></div>
		<div id='page-content' class='no-navigation'>
			<div class='breadcrumb'>
				<a href='http://beedie.sfu.ca'>Beedie School of Business</a> /
				<?php echo $siteTitle; ?>
			</div>
			<section class='main'>


