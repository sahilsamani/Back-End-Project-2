<?php  

/*This block of code will enable the text on the website to have custom made google fonts and their different fonts styles
*/
function the_archive() {
    
//    wp_enqueue_scripts('the-archive-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-made-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('the_archive_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'the_archive'); 

/* This block of code is the function that was created for the dynamic WordPress navigation menu which appears on the header.php
*/

function the_archive_web_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('locationFooterOne', 'Location Footer One');
    register_nav_menu('locationFooterTwo', 'Location Footer Two');
    add_theme_support('title-tag');
    
}

/* This block of code will add an action to the after setup theme and the "the_archive_web_features" function that is created above
*/
add_action('after_setup_theme', 'the_archive_web_features');




?>
