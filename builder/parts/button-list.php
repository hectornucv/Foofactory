<?php 
 // debug($vars);
if (is_array($vars) && !empty($vars)) {
$button_size= sizeof($vars);
if (1<$button_size) : ?>
<div class="button-list">
<?php endif; ?>
	<?php foreach ($vars as $key=>$button) {?>
		<?php switch (!empty($button['link_type'])?$button['link_type']:"default") {
			case 'internal':
				$link = (!empty($button['internal_link'])) ? $button['internal_link'] : '#no-link';
				break;
			case 'external':
				$link = (!empty($button['external_link'])) ? $button['external_link'] : '#no-link';
				break;
			case 'anchor':
				$link = "#".(!empty($button['anchor_link'])) ? $button['anchor_link'] : '#no-link';
				break;
			case 'archive':
				$link = (!empty($button['archive_link'])) ? $button['archive_link'] : '#no-link';
				break;
			case 'reveal':
				$randId= rand();
				$link = "#reveal-".$randId;
				$button['extra-data'] = "data-toggle='reveal'" ?>
			  <div id="<?php echo "reveal-".$randId ?>" class="store">
				  <?php  
	               get_component([ 'template' => 'molecule/oembed',
	               		            'vars' => $button['reveal_content']['oembed']
	                               ]);
	                               ?>
			  </div>
   

		<?php		break;	
			default:
				$link = (!empty($button['link'])) ? $button['link'] : '#no-link';
				break;
		}  
		if(!empty($button['create_other_window']))
			$button['extra-data'] .=" target='_blank'";
		?>
		

		<a class="btn text-uppercase <?php echo !empty($button['class'])?$button['class']:""?>" href="<?php echo $link?>" <?php echo !empty($button['extra-data'])?$button['extra-data']:"" ?>> <?php echo $button['text']; ?> </a>
		
		


	<?php } ?>

<?php if (1<$button_size) : ?>
</div>
<?php endif; ?>
<?php } ?>