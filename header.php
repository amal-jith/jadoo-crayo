<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?> 
    
</head>
<body <?php body_class(); ?>>
    
    <header id="masthead" class="site-header">
        
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Logo.svg" alt="Jadoo Logo">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#jadoo-navbar-content" aria-controls="jadoo-navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="jadoo-navbar-content">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'container'      => false,
                        'depth'          => 2,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                    <a href="#" class="btn sign-up-btn" type="button">Sign up</a>
                </div>
            </div>
        </nav>

    </header>
    
    <main id="content" class="site-main">
