<?php
	//debug($vars);


 if($vars['image_position'] == 'Right Side'){ 
	$vars['card_class'] = 'pull-left';
	$vars['img_class'] = 'pull-right';
	} else {
		$vars['card_class'] = 'pull-right';
		$vars['img_class'] = 'pull-left';
	}
	
?>
<article class="col-md-6 <?php echo $vars['class'] ?> <?php echo $vars['card_class'] ?> molecule card-img-side">
	<hgroup>
		<h6><?php echo $vars["subtitle"]?></h6>
		<h1><?php echo $vars["title"]?></h1>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
			<?php 
		if(isset($vars["button"])){
			get_component([
								'template' => 'atom/button-list',
								'vars' => $vars['button']	
								]);
		};
		?>

</article>
<div class="col-md-6 <?php echo $vars['img_class'] ?> text-center">
<?php if(true == is_numeric($vars['image'])){  echo wp_get_attachment_image( $vars['image'], 'full', "", array( "class" => "img-responsive" ) );  } else { ?>
		<img class="img-responsive" src="<?php echo $vars['image'] ?>" alt="">
		<?php } ?>
</div>