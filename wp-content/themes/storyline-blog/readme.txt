=== Theme Name ===
Contributors: cawpthemes
Tags: one-column, two-columns, three-columns, four-columns, grid-layout , custom-background, custom-logo, custom-menu, custom-header, editor-style, featured-images, footer-widgets, sticky-post, full-width-template, theme-options, translation-ready, threaded-comments, blog, photography
Requires at least: WordPress 5.6
Tested up to: WordPress 6.6
Stable tag:  1.0.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Storyline Blog WordPress Theme, Copyright 2024 cawpthemes
Storyline Blog is distributed under the terms of the GNU GPL

email       :   cawpthemes@gmail.com

Documenatation: https://cawpthemes.com/docs/storyline-blog-free-theme-documentation/

License: Distributed under the terms of the Apache License, version 2.0 http://www.apache.org/licenses/LICENSE-2.0.html

All the icons taken from genericons licensed under GPL License.
http://genericons.com/

Short description of your theme

== Description ==

Storyline Blog is a beautifully designed free WordPress theme, perfect for bloggers, writers, and storytellers looking to share their thoughts, experiences, and creativity with the world. Featuring a clean, minimalist design, this theme emphasizes readability and simplicity, allowing your content to take center stage.Packed with user-friendly features, Storyline Blog is ideal for both beginners and seasoned bloggers. It offers seamless customization options, responsive layouts, and compatibility with popular plugins, ensuring your blog looks stunning on any device. Whether you’re writing personal stories, travel adventures, or professional insights, Storyline Blog provides the perfect platform to showcase your voice and connect with your audience.Start your storytelling journey today with the Storyline Blog Free WordPress Theme—your stories deserve a place to shine.

== Donate link ==

[Donate link](https://cawpthemes.com/donation/)

== Installation ==

Download the theme zip file from your account on our website.
Go to Appearance > Themes in your WordPress dashboard.
Click the "Add New" button at the top of the screen, then click "Upload Theme".
Choose the theme zip file and click "Install Now".
Once the theme is installed, click the "Activate" button to activate it.


== Frequently Asked Questions ==

A list of frequently asked questions related to your theme.

== Changelog ==

= 1.0.0 =

Initial release

== 1.0.1==

Corrections

 1. Image URLs are not as Screenshots.

 2. Prefixing is improper in the function.php file, Also you can not add
 prefixing on third-party files.

 Wrong Prefix

 wp_enqueue_script( 'custom-js-storyline-blog',
 get_template_directory_uri() . '/menu/menu.js', array( 'jquery' ), '1.0',
 true );
 wp_enqueue_style( 'custom-css-storyline-blog',
 get_template_directory_uri() . '/menu/menu.css', array(), '1.0', 'all' );

 Third-party files

 wp_enqueue_style( 'bootstrap1-storyline-blog',
 get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
 wp_enqueue_script( 'bootstrap-storyline-blog',
 get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(
 'jquery' ), '', true );

 3. Escaping Missing.

 <?php echo esc_html( get_the_date() ); ?>

 4. Prifixing Missing.

 $theme_info


== Credits ==

This theme includes the following third-party assets:

jQuery (licensed under the MIT license)
Bootstrap CSS and JavaScript (licensed under the MIT license)
Font Awesome Icons (licensed under the SIL Open Font License)
Google Fonts (licensed under the Apache License, Version 2.0)

== License ==

This theme includes components from the Bootstrap framework.

Bootstrap is distributed under the terms of the MIT License:

= Bootstrap =
* Mark Otto
* copyright 2011-2024, Mark Otto
* https://getbootstrap.com/docs/4.0/getting-started/download/
* License: Code released under the MIT License.
* https://github.com/twbs/bootstrap/blob/main/LICENSE

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS," WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.


== wptt-webfont-loader ==

  Source: https://github.com/WPTT/webfont-loader/
  License: WPTT, https://github.com/WPTT/webfont-loader/blob/master/LICENSE
  Code: https://github.com/WPTT/webfont-loader/blob/master/wptt-webfont-loader.php

== upsell-section ==

  Source: https://github.com/dingo-d/wordpress-theme-customizer-extra-custom-controls/
  License: https://github.com/dingo-d/wordpress-theme-customizer-extra-custom-controls/blob/master/LICENSE.md


== Support ==

If you have any questions or need assistance with this theme, please visit our support page at https://cawpthemes.com/support/. You can also contact us directly via email at cawpthemes@gmail.com. We strive to respond to all support requests within 24 hours. Thank you for choosing our theme!


* Stocksnap Images
  License: CC0 1.0 Universal (CC0 1.0) 
  Source: https://stocksnap.io/license

  Blog Image 1, Copyright  Element5 Digital
  License: CC0 1.0 Universal (CC0 1.0)
  Source: https://stocksnap.io/photo/christmas-xmas-FMUEJKZBRH

  Blog Image 2, Copyright  Element5 Digital
  License: CC0 1.0 Universal (CC0 1.0)
  Source: https://stocksnap.io/photo/christmas-xmas-FMUEJKZBRH

  Blog Image 3, Copyright  Element5 Digital
  License: CC0 1.0 Universal (CC0 1.0)
  Source: https://stocksnap.io/photo/christmas-xmas-FMUEJKZBRH

  Author Image, Copyright Matt Moloney
  License: CC0 1.0 Universal (CC0 1.0)
  Source: https://stocksnap.io/photo/woman-portrait-WYOFLXRQQM


Image Folder Images/Icons
  Clip Art & All other Images/Icons and 404 image have been used in images folder, Created by CA WP Themes. Also they are GPL Licensed and free to use and free to redistribute further.

     
For any help you can mail us at cawpthemes@gmail.com