<head>
<meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
 <?php wp_head(); ?>
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:site" content="<?php echo get_permalink(); ?>">
 <meta name="twitter:title"  content="<?php the_title(); ?> - <?php echo get_bloginfo('name') ?>" >
 <meta name="twitter:text:description" content="<?php echo get_bloginfo('description') ?>">
 <meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/social-card.png">
 <meta property="og:url"                content="<?php echo get_permalink(); ?>" />
 <meta property="og:image"              content="<?php echo get_stylesheet_directory_uri(); ?>/social-card.png" />
 <meta property="og:type"               content="article" />
 <meta property="og:title"              content="<?php the_title(); ?> - <?php echo get_bloginfo('name') ?>" />
 <meta property="og:description"       content="<?php echo get_bloginfo('description') ?>" />
  <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-56758721-1', 'auto'); ga('send', 'pageview');
  </script>
</head>