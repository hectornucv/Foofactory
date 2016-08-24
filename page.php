

<?php wp_head(); ?>
<?php get_component([ 'template' => 'template/head' ]); ?>
</head>
<?php get_component([ 'template' => 'template/header' ]); ?>
<?php
	get_component([ 'template' => 'builder/builder' ]); 
 ?>
<?php
	get_component([ 'template' => 'template/footer' ]);
 wp_footer();
?>
