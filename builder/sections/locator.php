	<?php
				/*=============================================
				=    Card Header (Class,Subtitle,Title,Content)
				= @components
					+ elements/card-header
				=============================================*/
				get_component([ 'template' => 'elements/card',
												'remove_tags' =>  ['img'],
												'vars' => [
															"class" => 'card container padding-4 text-center',
															"subtitle" => $vars['subtitle'],
															"title" => $vars['title'],
															"content" => $vars['content']
															]
												 ]);
	?>
	<?php
				/*=============================================
				=    Map (Class,Description)
				= @components
					+ elements/map
				=============================================*/
				get_component([ 'template' => 'elements/map',
												'vars' => [
															"class" => 'map text-center row ',
															]
												 ]);
	?>