<section class="page-heading <?php echo $vars['class'] ?>" style="background-image:url(<?php echo $vars["background"]; ?>)">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => $vars["subtitle"],
														"title" => $vars["title"],
														"image" => $vars["image"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"button" => $vars['button']
														]
											 ]);
	 ?>

</section>