<?php
	/*=====================================
	=            Get Files            =
	=====================================*/
	?>
		<div class="col-md-6">
			<?php
				unset($element_file);
				unset($element_vars);
				for ($i=0; $i < sizeof($vars['1_element']['element']); $i++) {
					$element_file = $vars['1_element']['element'][$i]['acf_fc_layout']; //get file
					$vars['1_element']['element'][$i]['class'] .= ' col-md-12 ';
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

			<div class="col-md-6">
				<?php
					unset($element_file);
					unset($element_vars);
					for ($i=0; $i < sizeof($vars['2_element']['element']); $i++) {
						$element_file = $vars['2_element']['element'][$i]['acf_fc_layout']; //get file
						$vars['2_element']['element'][$i]['class'] .= ' col-md-12 ';
						unset($vars['2_element']['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
						$element_vars = $vars['2_element']['element'][$i];
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
