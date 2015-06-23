<!-- 
<article>
	<h3><?php echo __('Le Mot du Président') ?></h3>
	<p>
		<?php echo __('Vaincre le Paludisme, tel est l\'engagement de <strong>STOP PALU') ?></strong> ! 
		<?php echo __('Toute une équipe de bénévoles œuvre et met en place des actions en faveur de personnes atteintes de paludisme au Sénégal et au-delà des frontières.') ?>
	</p>
	<p>
		<?php echo __('Notre démarche s\'articule dans un esprit de rassemblement, de solidarité et de respect.') ?>
		<?php echo __('Elle s\'inscrit dans cette dynamique de générosité et de partage pour répondre aux attentes des populations locales.') ?>
	</p>
	<p>
		<?php echo __('Pour atteindre nos objectifs, nous <strong>sensibilisons</strong> le plus grand nombre de personnes animées par les mêmes valeurs, les mêmes intentions.') ?> 
		<?php echo __('Avec cette opération, nous espérons toucher un large public et une grande adhésion à notre combat contre le paludisme.') ?>
	</p>
	<p>
		<?php echo __('Je suis convaincu qu\'avec notre projet, nous avons la bonne stratégie. ') ?>
		<?php echo __('Nous devons redoubler d\'efforts dans l\'exécution de notre projet autour de notre mission « <strong>Accompagner, Sensibiliser et Prévenir</strong> « les populations locales pour leur apporter le meilleur du monde. La Sante') ?>
	</p>
	<p>
		<?php echo __('C\'est un dur combat qu\'il va falloir mener tous ensemble et j\'attends une mobilisation sans faille de votre part.') ?>
	</p>
</article>
 -->

<?php if($script_name != 'index.php'): ?>
	<article id="mini-slideshow">
		<img src="<?php echo $cd ?>img/mini-slider/1.png" alt="" class="active" />
	    <img src="<?php echo $cd ?>img/mini-slider/432JULIEN-CHRAIBI--crise-palu-SANOFI.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/malaria.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/Novartis-AG2.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/paludisme432.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/paludisme.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/photo_1323782104172-1-0.png" alt="" />
	    <img src="<?php echo $cd ?>img/mini-slider/Sa-paludisme-en-2010.png" alt="" />
	</article>
	<script>
	function slideSwitch() {
	    var $active = $('#mini-slideshow img.active');
	
	    if($active.length == 0)
	        $active = $('#mini-slideshow img:last');
	
	    var $next = $active.next().length ? $active.next():$('#mini-slideshow img:first');
	
	    $active.addClass('last-active');
	
	    $next	.css({opacity: 0.0})
		        .addClass('active')
		        .animate({opacity: 1.0}, 1000, function() {
		            $active.removeClass('active last-active');
		        });
	}
	
	$(function() {
	    setInterval( "slideSwitch()", 5000 );
	});
	</script>
<?php else: ?>
	<article>
		<h3><?php echo __('Tous unis pour vaincre la maladie') ?></h3>
		<p>
			<?php echo __('Bienvenue sur le site de Stop-Palu consacré à la lutte contre le paludisme.') ?>
		</p>
		<p>
			<?php echo __('Stop-Palu est une association qui a vu le jour au printemps 2011.') ?>
			<?php echo __('Elle est le fruit d\'une volonté commune d\'une poignée de jeunes sénégalais.') ?> 
			<?php echo __('Ils ont choisi d\'apporter leur appui dans la lutte contre le paludisme pour contrer la maladie qui ne cesse de tuer de jour en jour.') ?>
		</p>
		<p>
			<?php echo __('Toutes les 45 secondes une personne meurt du paludisme.') ?> 
			<?php echo __('Malgré les progrès et les programmes de lutte contre la maladie, aucun vaccin n\'est encore trouvé.') ?>
		</p>
		<p>
			<?php echo __('Sauvons des vies, engagez-vous dans un projet concret !') ?>
		</p>
	</article>
	
	<article>
		<h3><?php echo __('Nos Partenaires') ?></h3>
		<p>
			<a href="<?php echo $cd ?>img/LogoCMlaDefense.png" title="Crédit Mutuel - La Défence" class="partenaires"><img src="<?php echo $cd ?>img/mini-LogoCMlaDefense.png" alt="Crédit Mutuel - La Défence" /></a>
		</p>
	</article>
<?php endif ?>
<!-- 
<article>
	<h3><?php echo __('Activités en bref / Infos en bref') ?></h3>
	<p>
		<?php echo __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.') ?>
	</p>
</article>
 -->

<article>
	<h3><?php echo __('Nous Suivre') ?></h3>
	<div id="facebook_box">
		<script src="//connect.facebook.net/fr_FR/all.js"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=308165002578194";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like-box" data-href="http://www.facebook.com/pages/STOP-PALU-STP/347995528574627" data-width="240" data-show-faces="true" data-stream="false" data-header="true"></div>
	</div>
</article>