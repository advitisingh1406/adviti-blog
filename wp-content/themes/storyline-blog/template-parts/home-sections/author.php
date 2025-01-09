<?php
/**
 * Author Section Latest
 *
 * @package Storyline Blog
 */

// All function code and function definitions go here...

?>

<div class="author-section">
    <div class="author-profile">
        <?php if ( get_theme_mod( 'storyline_blog_author_image' ) ) : ?>
            <img src="<?php echo esc_url( get_theme_mod( 'storyline_blog_author_image' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'storyline_blog_author_name' ) ); ?>" />
        <?php endif; ?>
    </div>
    <h2 class="author-name">
        <?php echo esc_html( get_theme_mod( 'storyline_blog_author_name', __( 'Your Name', 'storyline-blog' ) ) ); ?>
    </h2>
    <!-- About Me Button -->
    <a href="<?php echo esc_url( get_theme_mod( 'storyline_blog_author_about_me_link', '#' ) ); ?>" class="about-me-button">
        <?php echo esc_html( get_theme_mod( 'storyline_blog_author_about_me_text', __( 'About Me', 'storyline-blog' ) ) ); ?>
    </a>

</div>
