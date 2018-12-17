<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?php bloginfo('name') ?>
            <?php if ( is_404() ) : ?> &raquo; 
            <?php _e('Not Found') ?>
            <?php elseif ( is_home() ) : ?> &raquo; 
            <?php bloginfo('description') ?>
            <?php else : ?><?php wp_title() ?>
            <?php endif ?>
        </title>
        <!– Ajout d’une nouvelle feuille de style qui sera spécifique à notre thème –>
        <!– HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 –>
        <!–[if lt IE 9]>
        <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/bootstrap/css/style.css">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]–>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <div class="container">

            <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button> -->
                <div class="menu-logo" >
                    <div class="navbar-brand">
                        <!--Logo-->
                        <span class="navbar-caption-wrap" ><a class="navbar-caption text-secondary display-5">
                            <a href="<?php bloginfo('url'); ?>" id="logo"><?php bloginfo('name'); ?></a>
                        </span>
                    </div>
                </div>
            
                <nav id="navigation-principale" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
                </nav>
            </div>
        </div>
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">