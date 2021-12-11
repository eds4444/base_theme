<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<?php the_title();  ?>

<?php the_content();  ?>

<?php

if( have_rows('text') ): ?>
 
        <ul>
			<p>

            <?php while( have_rows('text') ) : the_row();

                $t_text = get_sub_field('t_text');
				$t_text_area = get_sub_field('t_text_area');
				$t_img = get_sub_field('t_img');
				  echo $t_text;?><br>
			      <?php echo wp_get_attachment_image( $t_img['ID'], array( $t_img['width'], $t_img['height'] ) );?><br>
				  <?php echo $t_text_area; ?><br>
            <?php endwhile; ?>
			</p>
		</ul>
 <?php else :
endif;
 ?>

<?php get_footer(); ?>