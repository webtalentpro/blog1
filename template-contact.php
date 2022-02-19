<?php 
/* Template Name: Contact-page */
get_header(   ) ?>
    <!-- contact section -->
    <section class="contact-section sp-eight">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="contact-info">
                            <?php if($contact_image=get_field('image', 'options')){?>
                            <figure><img src="<?php echo $contact_image['url']?>" alt=""></figure>
                            <?php } ?>
                            <div class="lower-content">
                                <div class="title-top centred">
                                    <?php if(get_field('page_title', 'options')){?>
                                    <h3><?php the_field('page_title', 'options'); ?> </h3>
                                    <?php }  ?>

                                    <?php 
                                         $addr=get_field('address', 'options');
                                          $phone=get_field('phone_number', 'options');
                                          $desc=get_field('description', 'options');
                                     ?>

                                     
                                    <div class="text"> <?php echo $addr; ?><br />
                                    <?php echo $phone; ?> </div>
                                </div>
                                <?php if($desc){?>
                                <div class="text">
                                    <?php echo $desc; ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="contact-form-area">
                            <div class="title-text-two">FILL THE FORM</div>
                            <?php echo do_shortcode(' [contact-form-7 id="121" title="blog contact form"]'); ?>
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
    <!-- contact section end -->
    <?php get_footer(  ); ?>