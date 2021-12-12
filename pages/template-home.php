<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<?php the_title();  ?>

<?php the_content();  ?>

<?php

echo "Test repeater" ; ?><br>

<?php if( have_rows('text') ): ?>
 
        <ul>
			<p>

            <?php while( have_rows('text') ) : the_row();

                $t_text = get_sub_field('t_text');
				$t_text_area = get_sub_field('t_text_area');
				$t_img = get_sub_field('t_img');
				  echo $t_text;?><br>
			      <?php echo wp_get_attachment_image( $t_img['ID'], array( $t_img['width'], $t_img['height'] ) );?><br>
				  <?php echo $t_text_area; ?><br><br>
            <?php endwhile; ?>
			</p>
		</ul>
 <?php else :
endif;
 ?>

<?php

echo "Test flexible"; ?> <br>


<?php if( have_rows('flex') ):

	
    while ( have_rows('flex') ) : the_row();
    	
    	
    	if( get_row_layout() == 'content' ):
			$text = get_sub_field('t_flex');
			$ta = get_sub_field('ta_flex');
			$img = get_sub_field('img_flex');
			echo $text; ?><br>
			<?php echo $ta; ?><br>
			<?php echo wp_get_attachment_image( $img['ID'], array( $img['width'], $img['height'] ) );	
        endif;
    
    endwhile;

else :
	echo "Do something..." ;
endif; ?> <br><br>





<?php if( have_rows('tab_flex') ): ?><br>

    <?php echo "Test flexidle table";
	
while ( have_rows('tab_flex') ) : the_row(); ?>
		
	
	<table cellspacing = "10">

	    <tr>	
	
			<?php if( get_row_layout() == 'content' ):
				$t_l = get_sub_field('tab_l');
				$t_r = get_sub_field('tab_r');?>
				<td>
				<?php echo $t_l; ?>
				</td>
				<td>
				<?php echo $t_r; ?>
				</td>	
			<?php  endif;?>
				
        </tr>
	</table>

<?php endwhile;

else :
echo "Do something..." ;
endif; ?> <br><br>


<?php

  echo "Test car shop"; ?> <br><br>

<?php   if( have_rows('f_r') ): ?>
	    
	<table cols = "2" >
		
		<?php while ( have_rows('f_r') ) : the_row(); ?>			
			
			<?php if( get_row_layout() == 'sale' ):?>

				<tr>
					<td>        
						<?php $name_block = get_sub_field('name_block');
						echo $name_block;?>
					</td>
				</tr>  
				<?php if (have_rows('repeater')):  ?>				
					<tr>
						<td>     				
							
							<?php while( have_rows('repeater') ) : the_row();
								$img_rep = get_sub_field('img_rep');
								$int_rep = get_sub_field('int_rep') . "$";
								$text_rep = get_sub_field('text_rep');
								$textarea_rep = get_sub_field('textarea_rep');
								$button_rep = get_sub_field('button_rep');?>

								<table  width="30%">
									<tr>				
										<td>				
											<?php echo wp_get_attachment_image( $img_rep['ID'], array( $img_rep['width'], $img_rep['height'] ) ); ?><br>
											
											
											<?php echo $int_rep; ?><br>
											
											
											<?php echo $text_rep; ?><br>

											<?php echo $textarea_rep; ?><br>

											<a href="<?php echo $button_rep; ?>" target = "_blanck">
												<button>archive</button>
											</a><br>
										</td>		
									</tr>				
								</table>							
								
							<?php endwhile;  ?>
						</td>					
					</tr>
				<?php else : $default_sale = get_sub_field('default_sale');
						echo $default_sale; ?>

				<?php endif; ?>		
				
			<?php endif;?>							
		
		<?php endwhile; ?> 
	</table>

<?php endif; ?>


<?php   if( have_rows('f_r_full_tab') ): ?>
	    
		<table cols = "2" >
			
			<?php while ( have_rows('f_r_full_tab') ) : the_row(); ?>			
				
				<?php if( get_row_layout() == 'full' ):?>
	
					<?php if (have_rows('full_rep_tab_l')):  ?>				
						<tr>
							<td>     				
								
								<?php while( have_rows('full_rep_tab_l') ) : the_row();
									$img_rep = get_sub_field('img');
									$int_rep = get_sub_field('int') . "$";
									$text_rep = get_sub_field('text');
									$textarea_rep = get_sub_field('textarea');
									$button_rep = get_sub_field('button');?>
	
									<table  width="30%">
										<tr>				
											<td>				
												<?php echo wp_get_attachment_image( $img_rep['ID'], array( $img_rep['width'], $img_rep['height'] ) ); ?><br>
												
												
												<?php echo $int_rep; ?><br>
												
												
												<?php echo $text_rep; ?><br>
	
												<?php echo $textarea_rep; ?><br>
	
												<a href="<?php echo $button_rep; ?>" target = "_blanck">
													<button>archive</button>
												</a><br>
											</td>		
										</tr>				
									</table>							
									
								<?php endwhile;  ?>
							</td>					
						</tr>
					<?php endif; ?>
					<?php if (have_rows('full_rep_tab_r')):  ?>				
						<tr>
							<td>     				
								
								<?php while( have_rows('full_rep_tab_r') ) : the_row();
									$img_rep = get_sub_field('img');
									$int_rep = get_sub_field('int') . "$";
									$text_rep = get_sub_field('text');
									$textarea_rep = get_sub_field('textarea');
									$button_rep = get_sub_field('button');?>
	
									<table  width="30%">
										<tr>				
											<td>				
												<?php echo wp_get_attachment_image( $img_rep['ID'], array( $img_rep['width'], $img_rep['height'] ) ); ?><br>
												
												
												<?php echo $int_rep; ?><br>
												
												
												<?php echo $text_rep; ?><br>
	
												<?php echo $textarea_rep; ?><br>
	
												<a href="<?php echo $button_rep; ?>" target = "_blanck">
													<button>archive</button>
												</a><br>
											</td>		
										</tr>				
									</table>							
									
								<?php endwhile;  ?>
							</td>					
						</tr>
					<?php endif; ?>		
		
					
				<?php endif;?>							
			
			<?php endwhile; ?> 
		</table>
	
	<?php endif; ?>
	


<?php get_footer(); ?>

