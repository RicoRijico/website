

<?php
add_theme_support('custom-logo');
  add_theme_support( 'title-tag' );


// Theme Support
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  if ( ! function_exists( 'wpb_theme_setup' ) ) :

  // Theme Support
  function wpb_theme_setup(){
    load_theme_textdomain( 'camtoptec', get_template_directory() . '/languages' );

   // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
add_theme_support('post-thumbnails');
  
    
  }

function wpb_theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'wpb_theme' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
    ) );

}
      add_action( 'widgets_init', 'wpb_theme_widgets_init' );

endif;

  add_action('after_setup_theme','wpb_theme_setup');

  require get_template_directory() . '/inc/core.php';



// function rooky_add_admin_page(){
// 	add_menu_page( 'Rooky Theme Options', 'Rooky', 'manage_options', 'alecaddd_rooky' , 'rooky_theme_create_page', get_template_directory().'fav.png');

// 	//generate Rookey subpage
// 	add_submenu_page('alecaddd_rooky', 'Rookey Setting' , 'Setting', 'manage_options', 'alecaddd_rooky_setting', 'rooky_theme_setting_page');
// }
// add_action( 'admin_menu', 'rooky_add_admin_page' );

// function rooky_theme_create_page(){
// 	echo '<h1> Ocean Technology </h1>';
// }

// function rooky_them_setting_page(){

// }

  ?>