<?php 
	function get_picker($element_name,$vars){
		for ($i=0; $i < sizeof($vars[$element_name]['element']); $i++) {
			$element_file = $vars[$element_name]['element'][$i]['acf_fc_layout']; //get file
			$vars[$element_name]['element'][$i]['class'] .= ' col-md-12 ';
			get_component([
				'template' => 'elements/'.$element_file,
				'remove_tags' => $vars[$element_name]['element'][$i]['remove_elements'],
				'vars' => $vars[$element_name]['element'][$i]
				]);
				
		}
	}
?>