
<?php
if( class_exists('acf') ) { 
		if (is_front_page()){ ?>
		
		<?php 
			get_component([ 'template' => 'sections/homepage-heading',
													'remove_tags'=> get_field('remove_elements'),
													'vars' => [
																"class" => 'padding-4',
																"element" => get_field('slides')

																]
													 ]);
		 ?>
		<?php }else{ ?>
		<?php 
			if (get_field('has_page_heading')) {
				get_component([ 'template' => 'sections/page-heading',
													'remove_tags'=> get_field('remove_elements'),
													'vars' => [
																"class" => 'padding-6-top padding-6-bottom background',
																"card" => get_field('card'),
																"background" => get_field('background'),
																]
													 ]);
			}
			
		 ?>
<?php } ?>
<div class="builder-sections">
<?php
$layout_builder = get_field('layout');
//is there block?
if(isset($layout_builder[0])){
foreach ($layout_builder as $key => $value) {
	// debug($value);
	$section_file = $value['acf_fc_layout'];
	if(isset($section_file)){	
	unset($value['acf_fc_layout']); //of section
	//Section Options
	$value["section"] = $section_file;
	$value['section_data'] = get_section_options($value);
	//debug($value['section_data']);
	//Call file for display
	echo '<section '.$value['section_data'][1].'>';
	if($value['section_data'][0] == 'container'){
		echo '<div class="container">';
	}
			get_component([
						'template' => 'sections/'.$section_file,
						'vars' => $value
			]);
		if($value['section_data'][0]){
			echo '</div>';
		}
		echo '</section>';
				}
		
		unset($section_file);
	}
} else {
	get_component([
						'template' => 'needed/no-section-warning',
						'vars' => []
			]);
}
 ?>
</div>
<?php } else { echo 'Please enable ACF or replace the get_field() calls'; } ?>