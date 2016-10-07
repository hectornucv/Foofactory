<div class=" molecule form <?php echo $vars['class'] ?>">
		<h1><?php echo $vars["title"]?></h1>
		<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( $vars["form"]['id'] );}
		?>
</div>
