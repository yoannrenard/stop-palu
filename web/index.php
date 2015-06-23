<?php
$cd = '';
include($cd.'inc/inc.php');
include($cd.'inc/header.inc.php');
?>

<section>
	<!--
	<h2><?php echo __('Tous unis pour vaincre la maladie') ?></h2>
	<p>
		<?php echo __('Bienvenue sur le site de Stop-Palu consacré à la lutte contre le paludisme.') ?>
	</p>
	<p>
		<?php echo __('Stop-Palu est une association qui a vu le jour au printemps 2011.') ?>
		<?php echo __('Elle est le fruit d\'une volonté commune d\'un poignet de jeunes sénégalais.') ?> 
		<?php echo __('Ils ont choisi d\'apporter leur appui dans la lutte contre le paludisme pour contrer la maladie qui ne cesse de tuer de jour en jour.') ?>
	</p>
	<p>
		<?php echo __('Toutes les 45 secondes une personne meurt du paludisme.') ?> 
		<?php echo __('Malgré les progrès et les programmes de lutte contre la maladie, aucun vaccin n\'est encore trouvé.') ?>
	</p>
	<p>
		<?php echo __('Sauvons des vies, engagez-vous dans un projet concret !') ?>
	</p><br/>
	-->
	<div id="box_home" class="clearfix">
		<article class="box_one">
			<h3><a href="<?php echo $cd ?>le-paludisme.php"><?php echo __('Qu\'est ce que le Paludisme ?') ?></a></h3>
			<table>
				<tr>
					<td><a href="<?php echo $cd ?>le-paludisme.php"><img src="img/qu-est-ce-que-le-paludisme.png" class="stp_img" alt="" /></a></td>
					<td>
						<p><?php echo __('Le paludisme est une maladie grave, multiforme et mortelle.') ?><?php echo __('A l\'origine, le nom «paludisme» est dérivé du mot ancien «palud» qui signifie "marais" ...') ?></p>
						<a href="<?php echo $cd ?>le-paludisme.php" class="learn_more"><?php echo __('En savoir plus') ?></a>
					</td>
				</tr>
			</table>
		</article>
		<article class="box_two">
			<h3><a href="<?php echo $cd ?>vaincre-le-paludisme.php"><?php echo __('Comment vaincre cette maladie ?') ?></a></h3>
			<table>
				<tr>
					<td><a href="<?php echo $cd ?>vaincre-le-paludisme.php"><img src="img/vaincre-le-palu.png" class="stp_img" alt="" /></a></td>
					<td>
						<p><?php echo __('L\'un des Objectifs du Millénaire approuvés en 2000 par 189 pays est de freiner la progression et inverser la tendance de l\'incidence du ...') ?></p>
						<a href="<?php echo $cd ?>vaincre-le-paludisme.php" class="learn_more"><?php echo __('En savoir plus') ?></a>
					</td>
				</tr>
			</table>
		</article>
		<article class="box_tree">
			<h3><a href="<?php echo $cd ?>STP-lutte-contre-paludisme.php"><?php echo __('STP et la lutte contre le paludisme') ?></a></h3>
			<table>
				<tr>
					<td><a href="<?php echo $cd ?>STP-lutte-contre-paludisme.php"><img src="img/campagne-de-sensibilisation-contre-le-palu.png" class="stp_img" alt="" /></a></td>
					<td>
						<p><?php echo __('STP est une association régie par la loi du 1er juillet 1901. Elle a pour but de lutter contre le paludisme en Afrique et au Sénégal en particulier. ...') ?></p>
						<a href="<?php echo $cd ?>STP-lutte-contre-paludisme.php" class="learn_more"><?php echo __('En savoir plus') ?></a>
					</td>
				</tr>
			</table>
		</article>
		<article class="box_four">
			<h3><a href="<?php echo $cd ?>nous-regoindre.php"><?php echo __('Campagne de sensibilisation') ?></a></h3>
			<table>
				<tr>
					<td><a href="<?php echo $cd ?>nous-regoindre.php"><img src="img/stp-et-la-lutte-contre-le-paludisme.png" class="stp_img" alt="" /></a></td>
					<td>
						<p><?php echo __('Découvrir nos campagnes de sensibilisation') ?></p>
						<a href="<?php echo $cd ?>nous-regoindre.php" class="learn_more"><?php echo __('En savoir plus') ?></a>
					</td>
				</tr>
			</table>
		</article>
	</div>
</section>

<aside>
	<?php include($cd.'inc/skyscraper.inc.php') ?>
</aside>

<?php include($cd.'inc/footer.inc.php') ?>