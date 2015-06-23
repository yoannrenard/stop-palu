<?php if(isset($return)): ?>
	<?php if(count($return['error'])>0): ?>
		<div class="error_box">
			<?php foreach($return['error'] as $error): ?>
				<?php echo $error ?><br/>
			<?php endforeach ?>
		</div>
	<?php elseif($return['valid'] != ''): ?>
		<div class="valid_box">
			<?php echo $return['valid'] ?>
		</div>
	<?php endif ?>
<?php endif ?>