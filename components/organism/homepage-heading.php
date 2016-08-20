<section class="homepage-heading owl-carousel" >
<?php //debug($vars); ?>
    <?php

      foreach ($vars['slides'] as $key => $value) { ?>

     <div class="slide" style="background-image: url('<?php echo $value['background'] ?>');">
       <?php  get_component([ 'template' => 'molecule/card',
                         'vars' => [
                               "class" => 'container card',
                               "title" => $value['title'],
                               "subtitle" => $value["subtitle"],
                                "image" => $value["image"],
                               "content" => apply_filters('the_content',  $value["content"]),
                               "button" => $value['button']
                               ]
                          ]);?>
      </div>
      <?php }
    ?>

</section>
