<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<?php

if( have_rows('flex_fields_template') ):

    while ( have_rows('flex_fields_template') ) : the_row();

        if( get_row_layout() == 'content' ):
            $c_text = get_sub_field('c_text');
			echo $c_text;

        elseif( get_row_layout() == 'list' ): 
			if(have_rows('l_items')) : ?>
					<ul>
						<?php  while( have_rows('l_items') ) : the_row();
								$l_i_item = get_sub_field('l_i_item'); ?>
								<li><?php echo $l_i_item ?></li>
						<?php endwhile; ?>
					</ul>
			<?php endif;

		elseif( get_row_layout() == 'image' ): 
			$im_item = get_sub_field('im_item');
			echo wp_get_attachment_image( $im_item['ID'], array( $im_item['width'], $im_item['height'] ) );
		elseif( get_row_layout() == 'gallery' ): 
			if(have_rows('gallery_items')) : ?>
				<div class="img">
					<?php while(have_rows('gallery_items')) : the_row(); 
							$image = get_sub_field('gallery_items_item');
							echo wp_get_attachment_image( $image['ID'], array( $image['width'], $image['height'] ) );
						endwhile; ?>
				</div>
			<?php endif;
		endif;
    endwhile;

endif; 

?>

<?php get_footer(); ?>