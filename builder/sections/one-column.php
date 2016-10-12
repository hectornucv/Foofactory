<?php 
	// debug($vars);
	unset($element_file);
	unset($element_vars);

	foreach ($vars['columns'] as $column) {
		for ($i=0; $i < sizeof($column['element']); $i++) { 
			$element_file = $column['element'][$i]['acf_fc_layout']; //get file
			// $column['element'][$i]['class'] = '';
			unset($column['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
			$element_vars = $column['element'][$i];
			get_component([
		 		'template' => 'elements/'.$element_file,
		 		'remove_tags' => $column['element'][$i]['remove_elements'],
		 		'vars' => $element_vars
				]);

				unset($element_file);
				unset($element_vars);
		}
	}
?>
