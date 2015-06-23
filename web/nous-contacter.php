<?php
$cd = '';
include($cd.'inc/inc.php');
include($cd.'inc/header.inc.php');

include($cd.'classes/contact.class.php');

if(isset($_POST['submit']))
	$return = Contact::add($_POST);
?>

<section>
	<h2><?php echo __('Nous contacter') ?></h2>
	
	<h3>Siège social</h3>
	<p>
		27 rue des Etudiants<br/>
		92400 COURBEVOIE - FRANCE<br/>
		Téléphone : (33) 01 47 88 72 74<br/>
		n° association: <a href="http://www.net1901.org/association/STOP-PALU-STP,1012682.html" target="_blank">W922004954</a>
	</p>
	
	<h3>Nous contacter par mail</h3>
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
		<?php include($cd.'inc/print_return.inc.php'); ?>
		
		<div class="field">
			<input type="text" id="lastname" name="lastname" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']:'' ?>" />
			<label for="lastname"><?php echo __('Nom') ?> <span class="red_txt">*</span></label>
		</div>
		<div class="field">
			<input type="text" id="firstname" name="firstname" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']:'' ?>" />
			<label for="firstname"><?php echo __('Prénom') ?> <span class="red_txt">*</span></label>
		</div>
		<div class="field">
			<input type="text" name="email" id="email" value="<?php echo isset($_POST['email'])? $_POST['email']:'' ?>" />
			<label for="email"><?php echo __('Email') ?> <span class="red_txt">*</span> <?php echo __('(Pour vous répondre uniquement)') ?></label>
		</div>
		<div class="field">
			<input type="text" name="phone" id="phone" value="<?php echo isset($_POST['phone'])? $_POST['phone']:'' ?>" onkeydown="limite(this, 10);" onkeyup="limite(this, 10);" />
			<label for="email"><?php echo __('Téléphone') ?></label>
		</div>
		<div class="field">
			<input type="text" name="object" id="object" value="<?php echo isset($_POST['object'])? $_POST['object']:'' ?>" />
			<label for="object"><?php echo __('Objet') ?></label>
		</div>
		<div class="field">
			<label for="msg"><?php echo __('Message') ?> <span class="red_txt">*</span></label><br/>
			<textarea name="msg" id="msg" rows="10" cols="100%"><?php echo isset($_POST['msg'])? $_POST['msg']:'' ?></textarea>
		</div>
		<div class="field">
			<label for="captcha"><?php echo __('Recopier le code affiché') ?> <span class="red_txt">*</span></label><br/>
			<input type="text" name="captcha" id="captcha" size="35" /> <img src="captcha/captcha.php" alt="captcha" id="captcha_img" /> <img src="captcha/reload.png" id="reload" onclick="document.images.captcha_img.src='captcha/captcha.php?id='+Math.round(Math.random(0)*1000)+1" alt="" />
		</div>
		<div class="field"><span class="red_txt">* <?php echo __('Champs obligatoires') ?></span></div>
		<div class="field alright">
			<input type="submit" value="<?php echo __('Envoyer') ?>" id="submit" name="submit" />
		</div>
	</form>
</section>
<aside>
	<?php include($cd.'inc/skyscraper.inc.php') ?>
</aside>

<?php include($cd.'inc/footer.inc.php') ?>