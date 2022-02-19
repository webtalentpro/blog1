<?php get_header();
global $post;
$author_id = $post->post_author;
?>
 
 <!-- blog side -->
 <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
    <div class="container">
        <div class="row">
            	
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>> </div>
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <figure><?php echo the_post_thumbnail('post-image'); ?></figure>
                    <div class="blog-content-one sp-three">
                        <div class="top-content centred">
                           <div class="meta-text"><?php the_category(',' ); ?></div>
                            <div class="title"><h3><?php the_title(); ?></h3></div>
                            <div class="date"><span>On</span> <?php echo get_the_date();?>&nbsp;<i class="flaticon-circle"></i>&nbsp;<span>By</span>
                                  
                                    <?php echo get_the_author_meta( 'display_name', $author_id);?></div>
                        </div>
                        <div class="text-style-one">
                           
                        <?php the_content(); ?>
                        </div>
                        <ul class="meta-list centred">
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php echo get_comments_number(  ); ?></a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; <?php echo get_comments_number(  ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( )); ?>"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                        </ul>
                    </div>
                    <div class="single-authore">

                        <div class="authore-img"><figure><img src="<?php echo get_avatar_url( $author_id) ?>"></figure></div>
                        <div class="authore-title"><?php echo get_the_author_meta('display_name', $author_id ); ?> - <span>Author</span></div>
                        <div class="text"><p><?php echo get_the_author_meta( 'description', $author_id); ?></p></div>

                        <ul class="social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="related-post centred">
                        <div class="title-text-two">RELATED POSTS</div>
                        <div class="carousel-style-four nav-style-none dots-style-one">
                        <?php

                       $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                           if( $related ) foreach( $related as $post ) {
                            setup_postdata($post); ?>
 
                             <div class="carousel-style-one">
                              <figure><img src="<?php echo the_post_thumbnail_url(  ); ?>" alt=""></figure>
      
                                <div class="lower-content">
                                  <div class="meta-text"><?php the_category( ',' ); ?></div>
                                      <div class="title"><h6><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h6></div>
                                  </div>
                              </div>

                        <?php } wp_reset_postdata(); ?>                                                                             
                        </div>
                    </div>

                  
                  
                  
                  
                    <div class="comment-form">
                      
                        <div class="title-text-two"><?php echo get_comments_number(  ); ?> COMMENTS</div>
                      <?php if(comments_open(  ) || get_comments_number( )) :

                        comments_template(  );
                      endif; ?>
                  
                  
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