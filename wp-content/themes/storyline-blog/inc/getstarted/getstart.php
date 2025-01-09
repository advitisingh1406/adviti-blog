<?php
//about theme info
add_action( 'admin_menu', 'storyline_blog_gettingstarted_page' );
function storyline_blog_gettingstarted_page() {      
    add_theme_page( esc_html__('Storyline Blog', 'storyline-blog'), esc_html__('All About Storyline Blog', 'storyline-blog'), 'edit_theme_options', 'storyline_blog_mainpage', 'storyline_blog_content_main');   
}

function storyline_blog_notice() {
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
        <div class="notice-content">
            <p><?php esc_html_e( 'Thank You For Choosing CA WP Themes', 'storyline-blog' ); ?></p>
            <h2><?php esc_html_e( 'Thank You for installing Storyline Blog Free Theme!', 'storyline-blog' ) ?> </h2>
            <p><?php esc_html_e( "Please Click on the link below to Check The Full Theme Edit Documentation", 'storyline-blog' ) ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'storyline-blog' ); ?></a>
            </div>
            <h2><?php esc_html_e( 'Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'storyline-blog' ) ?> </h2>
            <h2><?php esc_html_e( 'Check The Pro Version: Storyline Blog Pro for Amazing Features for Unlimited Site', 'storyline-blog' ); ?></h2>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'storyline-blog' ); ?></a>
            </div>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Premium Demo', 'storyline-blog' ); ?></a>
            </div>
        </div>
    </div>
    <?php }
}

add_action( 'admin_notices', 'storyline_blog_notice' );


// Add a Custom CSS file to WP Admin Area
function storyline_blog_admin_page_theme_style() {
   wp_enqueue_style('storyline-blog-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
}
add_action('admin_enqueue_scripts', 'storyline_blog_admin_page_theme_style');

//About Theme Info
function storyline_blog_content_main() { 

    //custom function about theme customizer

    $return = add_query_arg( array()) ;
    $theme = wp_get_theme( 'storyline-blog' );
?>

<div class="admin-main-box">
    <div class="admin-left-box">
        <h2><?php esc_html_e( 'Welcome to Storyline Blog Theme', 'storyline-blog' ); ?> <span class="version"><?php $storyline_blog_theme_info  = wp_get_theme();
echo $storyline_blog_theme_info ->get( 'Version' );?></span></h2>
        <p><?php esc_html_e('CA WP Themes is a premium WordPress theme development company that provides high-quality themes for various types of websites. They specialize in creating themes for businesses, eCommerce, portfolios, blogs, and many more. Their themes are easy to use and customize, making them perfect for those who want to create a professional-looking website without any coding skills.','storyline-blog'); ?></p>
        <p><?php esc_html_e('CA WP Themes offers a wide range of themes that are designed to be responsive and compatible with the latest versions of WordPress. Our themes are also SEO optimized, ensuring that your website will rank well on search engines. They come with a variety of features such as customizable widgets, social media integration, and custom page templates.','storyline-blog'); ?></p>
        <p><?php esc_html_e('One of the unique things about CA WP Themes is their focus on providing excellent customer support. They have a dedicated team of support staff who are available 24/7 to help customers with any issues they may encounter. Their support team is knowledgeable and friendly, ensuring that customers receive the best possible experience.','storyline-blog'); ?></p>
    </div>
    <div class="admin-right-boxt">
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Buy Storyline Blog Premium Theme','storyline-blog'); ?></h4>
             <p><?php esc_html_e('Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'storyline-blog'); ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'storyline-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Premium Theme Demo','storyline-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'storyline-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Need Support? / Contact Us','storyline-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Contact Us', 'storyline-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Documentation','storyline-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( STORYLINE_BLOG_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Docs', 'storyline-blog' ); ?></a>
            </div>
        </div>
    </div>
</div>


<?php } ?>