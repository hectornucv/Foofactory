

<?php wp_head(); ?>
<?php get_component([ 'template' => 'needed/head' ]); ?>
</head>
<?php get_component([ 'template' => 'needed/header' ]); ?>
<?php
	get_component([ 'template' => 'builder/builder' ]); 
 ?>
<?php
	get_component([ 'template' => 'needed/footer' ]);
 wp_footer();
?>
