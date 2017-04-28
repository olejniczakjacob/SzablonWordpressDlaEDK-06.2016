<?php

// aktywacja menu
function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => ( 'Menu główne' )
		)
	);
}
add_action( 'init', 'register_my_menus' );



// aktywacja widgetów
function sidebar_widgets_init() {
	register_sidebar(
		array(
			'id' => 'primary-widget-area'
		)
	);
}
add_action( 'widgets_init', 'sidebar_widgets_init' );
add_theme_support( 'post-thumbnails' ); 



// nieklikalny rodzic w menu
add_action('wp_head', 'wpzen_empty_menu_items');
function wpzen_empty_menu_items() {
    wp_enqueue_script('jquery'); // na wypadek gdyby jQuery nie było załadowane
?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.menu-item a').each(function() {
                if(jQuery(this).attr('href') == '#'){
                    jQuery(this).click(function(e) { e.preventDefault(); });
                }
            });
        });
    </script>
<?php
}






// wyszukiwanie artykulu po tytule
function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
    $q = $wp_query->query_vars;
    $n = ! empty( $q['exact'] ) ? '' : '%';
    $search =
    $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( wpdb::esc_like( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );





// ustawienie szerokości strony
if(!isset($content_width))
    $content_width = 1024;
	
// aktywacja  paneli administracyjnych m.in tło strony
add_theme_support( 'custom-background');
	


?>






