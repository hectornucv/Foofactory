	<?php
				/*=============================================
				=    Card Header (Class,Subtitle,Title,Content)
				= @components
					+ molecule/card-header
				=============================================*/
				get_component([ 'template' => 'molecule/card',
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
					+ molecule/map
				=============================================*/
				get_component([ 'template' => 'molecule/map',
												'vars' => [
															"class" => 'map text-center row ',
															]
												 ]);
	?>