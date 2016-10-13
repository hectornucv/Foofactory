<?php if(strlen($vars['logo']) > 0){ ?>
		<a class="brand" href="<?= esc_url(home_url('/')); ?>">
			<img id="logo" src="<?php echo $vars['logo']; ?>" alt="<?php bloginfo('name'); ?>">
		</a>
<?php } else { ?>
		<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
<?php } ?>