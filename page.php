<?php get_header();
?>
 
 <!-- blog side -->
 <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <figure><?php echo the_post_thumbnail('post-image'); ?></figure>
                    <div class="blog-content-one sp-three">
                        <div class="top-content centred">
                         
                                                         
                        <div class="text-style-one">
                           
                                   
                     <?php
			         the_content();

			          wp_link_pages(
			               array(
					            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'belfast' ),
					            'after'  => '</div>',
			                 	)
			                  );
		                	?>

        
                   
                     </div>
                     </div>
                    </div>   
                                 
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side"> 
            <div class="sidebar-content">

            <?php get_sidebar( ); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>