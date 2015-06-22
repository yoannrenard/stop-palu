<!DOCTYPE html>
<html>
	<head>
		<title>Stop Palu</title>
		<meta charset="UTF-8">
		<meta name="description" content="<?php echo isset($page['description'])? $page['description']:REF_DESCRIPTION; ?>" />
		<meta name="keywords" content="<?php echo isset($page['keywords'])? $page['keywords']:REF_KEYWORDS ?>" />
		<link rel="shortcut icon" href="<?php echo $cd ?>img/favicon.ico" />
		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/colorbox.css">
		
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/modernizr-2.0.6.min.js"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="clearfix">
					<h1>
						<a href="<?php echo $cd ?>index.php">Tous unis pour vaincre le Paludisme</a>
					</h1>
					
					<div id="header_right">
						<a href="http://www.facebook.com/pages/STOP-PALU-STP/347995528574627" target="_blank" title="nous suivre sur Facebook" class="btn btn_facebook">Facebook</a>
						<a href="https://twitter.com/#!/StopPalu" target="_blank" title="Follow us on Twitter" class="btn btn_twitter">Twitter</a>
						
						<div id="help-us">
							<a href="https://www.apayer.fr/stoppalu" target="_blank" class="btn btn_donate"><?php echo __('Faire un don') ?></a>
						</div>
					</div>
				</div>
				
				<nav id="primary">
				<?php $script_name = basename($_SERVER['SCRIPT_NAME']); ?>
					<table>
						<tr>
							<td><a href="<?php echo $cd ?>index.php" <?php echo ($script_name=='index.php' || $script_name=='')? 'class="hover"':'' ?>><?php echo __('Accueil') ?></a></td>
							<td><a href="<?php echo $cd ?>qui-sommes-nous.php" <?php echo $script_name=='qui-sommes-nous.php'? 'class="hover"':'' ?>><?php echo __('Qui sommes-nous') ?> ?</a></td>
							<td><a href="<?php echo $cd ?>notre-programme.php" <?php echo $script_name=='notre-programme.php'? 'class="hover"':'' ?>><?php echo __('Notre Programme') ?></a></td>
							<td><a href="<?php echo $cd ?>nous-regoindre.php" <?php echo $script_name=='nous-regoindre.php'? 'class="hover"':'' ?>><?php echo __('Nous Rejoindre') ?></a></td>
							<td><a href="https://www.apayer.fr/stoppalu" target="_blank"><?php echo __('Nous Aider') ?></a></td>
							<td><a href="<?php echo $cd ?>nous-contacter.php" class="last<?php echo $script_name=='nous-contacter.php'? ' hover':'' ?>"><?php echo __('Nous Contacter') ?></a></td>
						</tr>
					</table>
				</nav>
			</div>
		</header>
		
		<div id="wrapper" class="container">
			<div class="clearfix">