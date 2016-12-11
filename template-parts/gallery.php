<!-- 

Template to post Episode Gallery Images

-->
<div class="content">
    
	<ul class="photogal">
	
	<?php
		//setup new WP_Query
		$wp_query = new WP_Query( 
			array(
				'posts_per_page'	=>	-1,
				'post_type'			=>	'gallery'
			)
		);
		
		//begine loop
		while ($wp_query->have_posts()) : $wp_query->the_post();
	?>
	
	<li class="element">
            <div class="gallery-image" style="background-image: url('<?php $thumnail_size= "album-grid"; echo the_post_thumbnail_url( $size ); ?>');">
                <a class="" rel="" 
        	href="
        		<?php the_field('episode_link_url') ?>
        	">
                    <div class="watch-now"><h3>Watch Now</h3></div>
                </a>
            </div>
            <div class="gallery-meta">
                <a class="" rel="" href="<?php the_field('episode_link_url') ?>  ">
                    <h3><?php echo get_the_title(); ?></h3>
                </a>
                <p>Download or Listen on iTunes</p>
            </div>
    </li><!--end li-->
        
        <?php endwhile; // end of the loop. ?>
        </ul><!--end photogallery-->
    
</div><!--end content-->
    
    