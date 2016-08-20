

<?php wp_head(); ?>
<?php get_component([ 'template' => 'template/head' ]); ?>
</head>
<?php get_component([ 'template' => 'template/header' ]); ?>
<?php
if (is_front_page()){ ?>
<?php
 // debug(get_field('slides'));
	get_component([ 'template' => 'organism/homepage-heading',

											'vars' => [
														"class" => 'padding-4',
														"slides" => get_field('slides'),
														]
											 ]);
 ?>
<?php }else{ ?>
<?php
	get_component([ 'template' => 'organism/page-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"background" => get_field('background'),
														"image" => get_field('image'),
														"button" => get_field('button'),

														]
											 ]);
 ?>
<?php } ?>
<?php
/*=====================================
=            Begin Builder            =
=====================================*/

$layout_builder = get_field('layout');
//is there block?
// debug($layout_builder);
if(isset($layout_builder[0])){
foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	if(isset($section_file)){
	unset($value['acf_fc_layout']); //of section
	//Section Options
	$value["section"] = $section_file;
	$value['section_data'] = get_section_options($value);
	// debug($value["section"]);
  // debug($value);

	//Call file for display
	echo '<section '.$value['section_data'].'>';
			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);

				}
		echo '</section>';

		unset($section_file);
	}
} else {
	get_component([
						'template' => 'template/no-section-warning',
						'vars' => []
			]);
}

/*=====================================
=            End Builder              =
=====================================*/
 ?>

<?php
	get_component([ 'template' => 'template/footer' ]);
 wp_footer();
?>
