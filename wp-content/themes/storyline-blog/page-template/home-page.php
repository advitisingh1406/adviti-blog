<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php get_header(); ?>


<main id="content">
    

    <div id="content" class="page-container container main-section">

        <?php do_action( 'storyline_blog_before_section1' ); ?>

        <?php get_template_part( 'template-parts/home-sections/author' ); ?>

        <?php do_action( 'storyline_blog_before_section1' ); ?>

        <?php get_template_part( 'template-parts/home-sections/latest-post' ); ?>

   

                <?php do_action( 'storyline_blog_before_section1' ); ?>

                <?php get_template_part( 'template-parts/home-sections/section1' ); ?>



    </div>

</main>

<?php get_footer(); ?>
