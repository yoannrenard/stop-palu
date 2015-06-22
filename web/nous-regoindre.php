<?php
$cd = '';
include($cd.'inc/inc.php');
include($cd.'inc/header.inc.php');

include($cd.'classes/introduce.class.php');

if(isset($_POST['submit']))
	$return = Introduce::add($_POST);
?>

<section>
	<h2><?php echo __('Nous Rejoindre') ?></h2>
	<p>
		<?php echo __('Vous pouvez rejoindre Stop Palu en toute simplicité.') ?>
		<?php echo __('Cette adhésion marquera votre intérêt et votre engagement à soutenir la cause que nous défendons.') ?>
	</p>
	<p>
		<?php echo __('Cette adhésion peut se faire sous deux formes:') ?>
	</p>
	
	<!-- 
	<ul>
		<li>
			<h3>Adhérant en tant que membre bienfaiteur :</h3>
			<p>
				Vous nous soutenez financièrement et vous nous aider à réaliser nos projets. Vous êtes tenu informé de nos activités et futurs projets.<br/>
				Vous serez susceptible d'être sollicité pour des aides sans aucune obligation sur le montant que vous aurez à donner. Pour devenir membre bienfaiteur il vous suffit de remplir ce formulaire.
			</p>
		</li>
		<li>
			<h3>Adhérant en tant que membre actif :</h3>
			<p>
				Vous participez pleinement aux activités de l'association, selon votre disponibilité bien sûre, et sur une base de bénévolat.
			</p>
			<p> 
				Votre participation sera en fonction de vos compétences et de votre profil, dans le domaine administratif, juridique, logistique, communication mais aussi pour la collecte des fonds ou l'organisation de manifestations au profit de STP. Pour devenir membre actif il vous suffit de remplir ce formulaire d'adhésion en cochant la case correspondante.
			</p>
		</li>
	</ul>
	 -->
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
		<?php include($cd.'inc/print_return.inc.php') ?>
		
		<div class="field">
			<select name="mode" id="mode">
				<option value="-1">---</option>
				<option value="membre bienfaiteur" title="<?php echo __('Vous nous soutenez financièrement et vous nous aider à réaliser nos projets. Vous êtes tenu informé de nos activités et futurs projets.') ?>"<?php echo (isset($_POST['mode']) && $_POST['mode']==__('membre bienfaiteur'))? 'selected="selected"':'' ?>><?php echo __('membre bienfaiteur') ?></option>
				<option value="membre actif" title="<?php echo __('Vous participez pleinement aux activités de l\'association, selon votre disponibilité, et sur une base de bénévolat.') ?>"<?php echo (isset($_POST['mode']) && $_POST['mode']==__('membre actif'))? 'selected="selected"':'' ?>><?php echo __('membre actif') ?></option>
			</select>
			<label for="mode"><?php echo __('Forme d\'adhésion souhaitée ?') ?> <span class="red_txt">*</span></label>
		</div>
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
			<select name="origin" id="origin">
				<option value="-1">---</option>
				<option value="Par une recherche sur un moteur de recherche" title="<?php echo __('Par une recherche sur un moteur de recherche') ?>"<?php echo (isset($_POST['origin']) && $_POST['origin']==__('Par une recherche sur un moteur de recherche'))? 'selected="selected"':'' ?>><?php echo __('Par une recherche sur un moteur de recherche') ?></option>
				<option value="Par bouche à oreille" title="<?php echo __('Par bouche à oreille') ?>"<?php echo (isset($_POST['origin']) && $_POST['origin']==__('Par bouche à oreille'))? 'selected="selected"':'' ?>><?php echo __('Par bouche à oreille') ?></option>
				<option value="Par une pub" title="<?php echo __('Par une pub') ?>"<?php echo (isset($_POST['origin']) && $_POST['origin']==__('Par une pub'))? 'selected="selected"':'' ?>><?php echo __('Par une pub') ?></option>
				<option value="Autres" title="<?php echo __('Autres') ?>"<?php echo (isset($_POST['origin']) && $_POST['origin']==__('Autres'))? 'selected="selected"':'' ?>><?php echo __('Autres') ?></option>
			</select>
			<label for="origin"><?php echo __('Comment vous nous avez connu ?') ?> <span class="red_txt">*</span></label>
		</div>
		<div class="field">
			<label for="captcha"><?php echo __('Recopier le code affiché') ?> <span class="red_txt">*</span></label><br/>
			<input type="text" name="captcha" id="captcha" size="35" /> <img src="captcha/captcha.php" alt="captcha" id="captcha_img" /> <img src="captcha/reload.png" id="reload" onclick="document.images.captcha_img.src='captcha/captcha.php?id='+Math.round(Math.random(0)*1000)+1" alt="" />
		</div>
		<div class="field"><span class="red_txt">* <?php echo __('Champs obligatoires') ?></span></div>
		<div class="field alright">
			<input type="submit" value="Envoyer" id="submit" name="submit" />
		</div>
	</form>
	
	<p>
		<?php echo __('Pour atteindre nos objectifs, nous avons besoin de VOUS. Avec votre participation, nous espérons toucher un large public et une grande adhésion à ce combat qui nous concerne tous.') ?>
	</p>
	
</section>

<aside>
	<?php include($cd.'inc/skyscraper.inc.php') ?>
</aside>

<?php include($cd.'inc/footer.inc.php') ?>