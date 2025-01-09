<?php

//--------------------------Theme Information File------------------

if( class_exists( 'WP_Customize_control' ) ){

    class Storyline_Blog_Custom_Text extends WP_Customize_Control
    {
        /**
        * Render the content on the theme customizer page
        */
        public function render_content()
        {
            ?>
            <label>
                <strong class="customize-text_editor"><?php echo wp_kses_post( $this->label ); ?></strong>
                <br />
                <span class="customize-text_editor_desc">
                    <?php echo wp_kses_post( $this->description ); ?>
                </span>
            </label>
            <?php
        }
    }//editor close
    
}//class close


//---------------------Custumizer Code------

add_action( 'customize_register', 'storyline_blog_customizer_theme_info' );

function storyline_blog_customizer_theme_info( $wp_customize ) {
  
    $wp_customize->add_section( 'storyline_blog_theme_info_section' , array(
    'title'       => esc_html__( 'Theme Information' , 'storyline-blog' ),
    'priority' => 2
  ) );
    

  $wp_customize->add_setting( 'theme_info', array(
    'default' => '',
    'sanitize_callback' => 'wp_kses_post',
  ) );
    
    $storyline_blog_theme_info  = '';
  
  $storyline_blog_theme_info  .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Theme Details', 'storyline-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://cawpthemes.com/storyline-blog-premium-wordpress-theme/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'storyline-blog' ) . '</a></span><hr>';

  $storyline_blog_theme_info  .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Documentation', 'storyline-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://cawpthemes.com/docs/storyline-blog-free-theme-documentation/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'storyline-blog' ) . '</a></span><hr>';
  $storyline_blog_theme_info  .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Demo', 'storyline-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://demo.cawpthemes.com/storyline-blog-pro/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'storyline-blog' ) . '</a></span><hr>';
  $storyline_blog_theme_info  .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Need Support', 'storyline-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://cawpthemes.com/support/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'storyline-blog' ) . '</a></span><hr>';

  $wp_customize->add_control( new Storyline_Blog_Custom_Text( $wp_customize ,'theme_info',array(
    'section' => 'storyline_blog_theme_info_section',
    'label' => $storyline_blog_theme_info 
  ) ) );

}


//-------------------------Premium Information Display Code------

add_action( 'customize_register', 'storyline_blog_customizer_premium_features' );

function storyline_blog_customizer_premium_features( $wp_customize ) {
    

    $wp_customize->add_setting( 'premium_features', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    
    $premium_features = '<div class="premium-info"><h2>' . esc_html__( 'Premium Version', 'storyline-blog' ) . ': </h2>

        <p>' . esc_html__( 'Would you like to enhance the appearance and functionality of your website with an extended range of color options, font styles, and the ability to modify your footer copyright information? Consider upgrading to the pro version of your current theme, which may also include premium support and additional features to further customize your website.', 'storyline-blog' ) . '</p>
        <ul>
        <li><span class="dashicons dashicons-yes"></span> ' . esc_html__( 'Premium Design', 'storyline-blog' ) . '</li>
        <li><span class="dashicons dashicons-yes"></span> ' . esc_html__( 'More Home Page Section', 'storyline-blog' ) . '</li>
        <li><span class="dashicons dashicons-yes"></span> ' . esc_html__( 'Edit Footer Copyright Information', 'storyline-blog' ) . '</li>
        <li><span class="dashicons dashicons-yes"></span> ' . esc_html__( 'Premium Support', 'storyline-blog' ) . '</li>
        <ul>
        <hr>

    <a class="button button-primary" href="' . esc_url( 'https://cawpthemes.com/storyline-blog-premium-wordpress-theme/' ) . '" target="_blank">' . esc_html__( 'Upgrade to Premium Version', 'storyline-blog' ) . '</a></div>';

    $wp_customize->add_control( new Storyline_Blog_Custom_Text( $wp_customize ,'premium_features',array(
        'section' => 'storyline_blog_theme_info_section',
        'label' => $premium_features
    ) ) );

}



// ------------------------Theme More Premium Section Code-------

