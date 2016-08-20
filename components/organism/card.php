<?php
			//debug($vars);
			/*=============================================
			= Card (Class,Image,Title,Content)
			= @components
				+ molecule/card-img-side
			=============================================*/

			get_component([ 'template' => 'molecule/card-img-side',
							'remove_tags' =>  $vars['remove_elements'],
											'vars' => [
														"class" => 'col-md-6 card para',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"image" => $vars['image'],
														"image_position" => $vars['image_position'],

															"button" => $vars['button']
														]
											 ]);

			
?>
