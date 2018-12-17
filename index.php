<?php get_header(); ?>

<div class="container-fluid banner">
    <div class="row">
        <div class="blog-header">
            <div class="ban">
                <img src="<?php bloginfo('template_directory')?>/screenshot.jpg" alt="" width="100%">
            </div>
            <div class="inner-banner">
                <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php
                if( have_posts()) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                endif;
            ?>
        </div> <!– /.blog-main –>
        <?php get_sidebar(); ?>
    </div> <!– /.row –>
</div>


<?php get_footer(); ?>