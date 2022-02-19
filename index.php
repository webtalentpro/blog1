
<?php get_header(); ?>
    <section class="slider-style-six">
        <div class="container">
            <div class="row">
                <?php $args=array(
                    'post_type'=> 'post',
                    'posts_per_page'=> 3,
                    'order'=>'ASC',
                );
                $query=new WP_Query($args);
                while($query->have_posts(  )){
                    $query->the_post();
                    
                    ?>

            <?php if( 1 > $query-> current_post){?>
                <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php echo the_post_thumbnail_url(  ) ?>" alt="">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category( ' , ') ?></div>
                                            <div class="title"><h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3></div>
                                            <div class="date"><span>On</span><?php the_date()?>&nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 col-sm-12 col-xs-12 column">

                <?php 
                } 
                 else if( 3 > $query->current_post){
                ?>
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php echo the_post_thumbnail_url(  ) ?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category( ', '); ?></div>
                                            <div class="title"><h3><a href="<?php the_permalink(  ); ?>"><?php the_title();?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date();?>&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author( ); ?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
               
             
                <?php } 
                 } 
                wp_reset_postdata(  );
             ?>
                   </div>
            </div>
        </div>
    </section>


    <!-- carousel-style-one -->
    <section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">
            <?php $args=array(
                'post_type'=>'post',
                'posts_per_page'=>10,
                'order'=>'ASC',
                'orderby'=> 'title',
            );
            $query=new WP_Query($args);
            while($query->have_posts(  )){
                $query->the_post(  );
            ?>
            <div class="single-item second_slider_image">
                <div class="single-item-overlay">
                    <div class="img-box">
                    <img src="<?php echo the_post_thumbnail_url( ) ?>">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content blog-content-one">
                                    <div class="meta-text"><?php the_category( ' , ');  ?></div>
                                    <div class="title"><h6><a href="<?php the_permalink(  ); ?>"><?php the_title();  ?></a></h6></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(  ); ?>
        </div>
    </section>
    <!-- carousel-style-one end -->


    <!-- blog side -->
    <section class="blog-side blog-style-one blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="row">
                           <?php $args=array(
                               'post_type'=>'post',
                             
                           );
                           $query=new WP_Query($args);
                           while($query->have_posts(  )){
                               $query->the_post(  );
                               ?>
                           
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="content-box overlay-item">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><?php echo the_post_thumbnail( ); ?></figure>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="<?php the_permalink(  ); ?>"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content-one blog-content-two sp-six centred">
                                        <div class="top-content">
                                            <div class="meta-text"><?php the_category(',' ); ?></div>
                                            <div class="title"><h4><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h4></div>
                                            <div class="date"><span>On </span> <?php the_date(  ); ?> &nbsp;<i class="flaticon-circle"></i><span> By</span> <a
                                         href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                                         title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></div>
                                        </div>
                                        <div class="text">
                                          <?php the_excerpt(  ); ?>
                                        </div>
                                        <ul class="meta-list centred">
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<?php echo get_comments_number(  )?></a> &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <?php } wp_reset_postdata(  );?>
                                                                                                                                                          
                            
                        </div>

                              <div class="row">
                                   <div class="col text-center">
                                   <div class="block-27">
                                 <nav class="blog-pagination justify-content-center d-flex">
                                   <ul class="pagination">
                                    <?php the_posts_pagination( array( 'screen_reader_text'=> ' ', 
                                      'prev_text'=> '<i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV', 
                                     'next_text'=> 'NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i>', ) ) ?>
                                    </ul>
                                 </nav>
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
    <!-- blog side end -->
<?php get_footer();