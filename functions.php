<!-- Code was made by following along in class with Warren -->
<?php
/*
  * Register a navigation menu.
  */
register_nav_menus(
  array(  // An "ID" for the menu, and the text that appears to admin
    'main_menu' => 'Main Menu (Header)',
    'footer_menu' => 'Footer Menu',

  )
);
/**
 * Enqueue theme stylesheets and scripts.
 */
add_action( 'wp_enqueue_scripts', function()
{
  // Enqueue our JavaScript!
  wp_enqueue_script(
    // An ID / name for our script.
    'techcareers-theme-scripts',
    // The "public" path to the script file.
    get_theme_file_uri( 'assets/js/scripts.js' ),
    // Dependencies ( jQuery, BootStrap, etc.)
    array(),
    // Version number of the file.
    strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ),
    // Should we output this script in the foor.php?
    FALSE
  );
  // Enqueue our stylesheet!
  wp_enqueue_style(
    'techcareers-theme-main-styles',
    get_theme_file_uri( 'assets/css/main.css' ),
    strftime( get_theme_file_uri( '/assets/css/main.css' ) ),
    // The type of media we're targetting (media query)
    'all'
  );
} );
