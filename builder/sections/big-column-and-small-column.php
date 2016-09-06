<?php
// debug($vars);
	/*==================================
	=            Setup Vars            =
	==================================*/
	?>
		<div class="col-md-8 col-xs-12">
			<?php
				unset($element_file);
				unset($element_vars);
				for ($i=0; $i < sizeof($vars['1_element']['element']); $i++) {
					$element_file = $vars['1_element']['element'][$i]['acf_fc_layout']; //get file
					$vars['1_element']['element'][0]['class'] .= ' col-md-12 ';
					unset($vars['1_element']['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
					$element_vars = $vars['1_element']['element'][$i];
					get_component([
						'template' => 'molecule/'.$element_file,
						'vars' => $element_vars
						]);
						//'remove_tags' => $vars['1_element']['element'][$i]['remove_elements'],

						unset($element_file);
						unset($element_vars);
				}
						unset($i);

				 ?>
	</div>

			<div class="col-md-4 col-xs-12">
				<?php
					unset($element_file);
					unset($element_vars);
					for ($i=0; $i < sizeof($vars['2_element']['element']); $i++) {
						$element_file = $vars['2_element']['element'][$i]['acf_fc_layout']; //get file
						$vars['2_element']['element'][0]['class'] .= ' col-md-12 ';
						unset($vars['2_element']['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
						$element_vars = $vars['2_element']['element'][$i];
						get_component([
							'template' => 'molecule/'.$element_file,
							'vars' => $element_vars
							]);
							//TODO - List has p tags so can't use remove tags
							unset($element_file);
							unset($element_vars);
					}
							unset($i);

					 ?>
	</div>
	<?php

 ?>
