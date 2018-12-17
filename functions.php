<?php
/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
    wp_register_style('main-style', get_template_directory_uri().'/style.css', array(), true);
    wp_enqueue_style('main-style');
    wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
    wp_enqueue_style('bootstrap-style');

    // wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), true);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
?>

<?php
/* Emplacement du menu */
register_nav_menus( array(
'menu-principal' => 'Menu principal'
) );
?>
<!-- Utilitaires -->
<?php
  function parent_setup(){
    //Support des vignettes Ajout d'une image a la une
    add_theme_support( 'post-thumbnails' );

  }
  add_action('after_setup_theme', 'parent_setup');
?>
