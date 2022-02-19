<?php get_header();
/* Template Name: Full Width */
?>
 
 <!-- blog side -->
 <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 content-side">
                <div class="blo12-details-content">
                    <figure><?php echo the_post_thumbnail('post-image'); ?></figure>
                    <div class="blog-content-one sp-three">
                        <div class="top-content centred">
                           
                            <div class="title"><h3><?php the_title(); ?></h3></div>                                     
                        <div class="text-style-one">
                           
                        <?php the_content(); ?>
        
                   
                     </div>
                     </div>
                    </div>   
                                 
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>