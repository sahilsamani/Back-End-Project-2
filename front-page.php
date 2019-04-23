<!--This front-page.php tempate will be used for our website homepage-->

<?php  get_header(); ?>

<!--This block of code has php in it and this will generate a path to the theme folder where it will get the image -->
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-3.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome</h1>
        <h2 class="headline headline--medium">Please browse around for more information</h2>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
                    <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
                </div>
            </div>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
                    <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
                </div>
            </div>

            <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">The Archive News</h2>

            <!--Created a custom query that enables us to query WordPress the content that we want. In this case we are quering WordPress to output the news blog content from the individual news blog post-->
            <?php 
    
                $frontpagePosts = new WP_Query(array(
                    
                    'posts_per_page' => 2
                    
                ));
                
         /* This block of code is telling the user that while the variable $frontpagePosts that has -> 'have_posts' is true, it will output the posts from the news blog post
         */
                while($frontpagePosts->have_posts()) {
                    $frontpagePosts->the_post();?>
            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php the_time('M'); ?></span>
                    <span class="event-summary__day"><?php the_time('D') ?></span>
                </a>

                <!--This block of code will set the href links to the WordPress permalink, which in this case is aiming to the the_title()-->
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                </div>
            </div>

            <!--This small code will reset different WordPress data and global variables back to the state it was in when it made its default automatic query based on the current url-->
            <?php } wp_reset_postdata();
            ?>




            <p class="t-center no-margin"><a href="<?php echo site_url('/news'); ?>" class="btn btn--yellow">View All Archive News</a></p>
        </div>
    </div>
</div>

<?php 
    if(is_home()|| is_front_page()){
        echo do_shortcode('[smartslider3 slider=2]');
    }
?>

<!--


            <div class="hero-slider">
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/trove/tocumwal-trove-4.jpg');?>">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">The Tocumwal Air Force Base Story</h2>
                            <p class="t-center">View the story in detail</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-4.jpg');?>">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">On The Road Story</h2>
                            <p class="t-center">View the story in detail</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-7.jpg');?>">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Unloading in Oconner</h2>
                            <p class="t-center">View the story in detail</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-10.jpg');?>">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Who ever thought we'd get a Tocumwal house Story</h2>
                            <p class="t-center">View the story in detail</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            -->

<?php
    get_footer();

?>
