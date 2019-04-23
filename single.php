<!--Single.php is used for individual posts-->


<?php

get_header();


while(have_posts()) {
the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-12.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
    </div>
</div>

<!--This div class container hozrizontally centres our content in the party news individual blog post. This will enable us to add the actual content in the party news blog post  -->
<div class="container container--narrow page-section">

    <!--  This div class of metabox will create a box that will enable the user to head back to the news blog home  -->

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/news'); ?>"><i class="fa fa-home" aria-hidden="true"></i> News Blog Home</a> <span class="metabox__main">Posted By <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?></span></p>
    </div>

    <!--    This block of code will generate the party news blog post content. The generic-content class will make sure that it gives the paragraph different heading levels the perfect styling-->
    <div class="generic-content"><?php the_content(); ?></div>

    <?php }

get_footer();

?>
