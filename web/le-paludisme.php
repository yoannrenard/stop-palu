<?php
$cd = '';
include($cd.'inc/inc.php');
include($cd.'inc/header.inc.php');
?>

<section>
	<h2><?php echo __('Qu\'est-ce que le paludisme ?') ?></h2>
	
	<h3><?php echo __('Définition du paludisme') ?></h3>
	<p>
		<?php echo __('Le paludisme est une maladie grave, multiforme et mortelle. ') ?>
		<?php echo __('A l\'origine, le nom «paludisme» est dérivé du mot ancien «palud» qui signifie «marais», parce que les larves des moustiques s\'y concentrent. ') ?>
		<?php echo __('En 1880, les scientifiques ont découvert la véritable cause du paludisme : un parasite unicellulaire microscopique appelé le plasmodium, responsable de l\'immense majorité des décès.') ?>
	</p>
	
	<h3><?php echo __('Modes de transmission') ?></h3>
	<p>
		<?php echo __('Le parasite est le plus souvent transmis par les piqûres d\'un moustique, l\'anophèle femelle, qui a besoin de sang pour nourrir ses œufs. ') ?>
		<?php echo __('L\'anophèle femelle pique entre le coucher du soleil et l\'aube.') ?>
		<?php echo __('Autres modes de transmission : la contamination de la mère au fœtus, lors d\'une greffe ou d\'une transfusion sanguine.') ?>
		<?php echo __('Les schémas de transmission et de morbidité varient énormément selon les régions et à l\'intérieur des pays. ') ?>
		<?php echo __('Ces variations tiennent aux différences entre les parasites et les moustiques vecteurs, aux conditions écologiques qui influent sur la transmission et à des facteurs économiques comme la pauvreté et l\'accès à des soins et à des services de prévention efficaces.') ?>
	</p>
	
	<h3><?php echo __('Symptômes') ?></h3>
	<p>
		<?php echo __('Les symptômes peuvent aller de la fièvre, fatigue, maux de tête, troubles digestifs... à des manifestations plus graves, mortelles, telles que l\'anémie sévère, le coma, les convulsions généralisées, l\'hypoglycémie, l\'œdème pulmonaire, l\'insuffisance rénale, les infections sévères, les hémorragies...') ?>
		<?php echo __('Les symptômes peuvent évoluer en quelques jours, parfois même en quelques heures. ') ?>
		<?php echo __('Si cette évolution est rare chez le sujet adulte vivant en zone d\'endémie, elle est plus fréquente chez l\'enfant ou le sujet non immunisé.') ?>
		<?php echo __('Les premiers symptômes doivent être pris en charge dans les bons délais (moins de 24 heures) pour éviter la suite fatale.') ?>
	</p>
</section>

<aside>
	<?php include($cd.'inc/skyscraper.inc.php') ?>
</aside>

<?php include($cd.'inc/footer.inc.php') ?>