<?php
/**
 * The main template file.
 * This file acts as the view handler for the homepage.
 */
get_header(); // This is like calling 'extends base.html' or including the header partial
?>

<div id="primary" class="content-area">
    
    <?php 
    // This is like calling 'include hero_section.html'
    get_template_part( 'template-parts/content', 'hero' ); 
    ?>

    <?php 
    // This template part will contain the WordPress database query
    get_template_part( 'template-parts/content', 'destinations' ); 
    ?>

    <?php 
    get_template_part( 'template-parts/content', 'testimonials' ); 
    ?>
    
</div>

<?php
get_footer(); // This is like calling the footer partial and closing the body/html tags