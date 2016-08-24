<div class="molecule oembed"> 
<?php 
switch ($vars['type_of_media']) {
		    case 'video': ?> 

<div class="placeholder video" style="min-height:<?php echo $vars['placeholder']['height'].'px'; ?>; background-size:cover; background-image:url('<?php echo $vars['placeholder']['url']; ?>')">
<i class="icon-play"></i>
				<iframe width="100%" height="<?php echo $vars['placeholder']['height'].'px'; ?>" src="https://www.youtube.com/embed/<?php echo getYtCode([
					'youtube' => $vars['embed'],
					'rel' => 0,
					'showinfo' => 0,

					]); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
		     <?php   break;
		    case 'tweet':
		       
		        break;
		    case 'soundcloud':
		        //
		        break;
		}
 ?>
</div>

