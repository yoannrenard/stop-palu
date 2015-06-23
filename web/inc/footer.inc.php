			</div> <!-- end # -->
		</div> <!-- end #wrapper -->
		
		<hr class="container" />
		
		<footer class="container">
			<p class="acenter">
				&copy; 2010-2012 <a href="http://stop-palu.com">stop-palu.com</a> - All rights reserved. | 
				<a href="<?php echo $cd ?>infos-legales.php"><?php echo __('Infos légales') ?></a> | 
				Powered by Alioune Sall | 
				Propulsed by <a href="http://www.yoannrenard.fr/" title="développeur web freelance sur paris">Yoann RENARD</a>
			</p> 
		</footer>
		
		<script src="js/jquery.colorbox-min.js"></script>
		<script>
		$(document).ready(function() {
			$(".partenaires").colorbox();
		});

		function limite(zone,max)
		{
			if(zone.value.length>=max)
			{
				zone.value=zone.value.substring(0,max);
			}
		}
		</script>
	</body>
</html>