<?php
load_theme_textdomain('typo');
add_theme_support('title-tag');

// akcja rejestruje menu 'primary'
function register_menus() {
    register_nav_menu( 'primary', __( 'Menu główne', 'typo' ) );
}
add_action( 'init', 'register_menus' );

// filtr powoduje dodanie odnośnika do strony głównej na liście podstron witryny,
// jeśli nie przypisano do menu 'primary' niestandardowego menu
function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

// funkcja na podstawie implementacji
// w Genesis Framework
if ( ! function_exists( 'num_paging_nav' ) ) :
  function num_paging_nav() {
    if( is_singular() )
  		return;

  	global $wp_query;

  	/** Stop execution if there's only 1 page */
  	if( $wp_query->max_num_pages <= 1 )
  		return;

  	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  	$max   = intval( $wp_query->max_num_pages );

  	/**	Add current page to the array */
  	if ( $paged >= 1 )
  		$links[] = $paged;

  	/**	Add the pages around the current page to the array */
  	if ( $paged >= 3 ) {
  		$links[] = $paged - 1;
  		$links[] = $paged - 2;
  	}

  	if ( ( $paged + 2 ) <= $max ) {
  		$links[] = $paged + 2;
  		$links[] = $paged + 1;
  	}

  	echo '<nav id="page-main-nav"><ul>' . "\n";

  	/**	Previous Post Link */
  	if ( get_previous_posts_link() )
  		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  	/**	Link to first page, plus ellipses if necessary */
  	if ( ! in_array( 1, $links ) ) {
  		$class = 1 == $paged ? ' class="active"' : '';

  		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

  		if ( ! in_array( 2, $links ) )
  			echo '<li>…</li>';
  	}

  	/**	Link to current page, plus 2 pages in either direction if necessary */
  	sort( $links );
  	foreach ( (array) $links as $link ) {
  		$class = $paged == $link ? ' class="active"' : '';
  		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  	}

  	/**	Link to last page, plus ellipses if necessary */
  	if ( ! in_array( $max, $links ) ) {
  		if ( ! in_array( $max - 1, $links ) )
  			echo '<li>…</li>' . "\n";

  		$class = $paged == $max ? ' class="active"' : '';
  		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  	}

  	/**	Next Post Link */
  	if ( get_next_posts_link() )
  		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

  	echo '</ul></nav>' . "\n";
  }
endif;

/* shortcodes */
function shortcode_empty_paragraph_fix($content)
{
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );
    return strtr($content, $array);
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');

function block_gen( $atts, $content = null ){
  $a = shortcode_atts( array(
        'type' => 'blank'
    ), $atts );

	return '<div class="block block-' . esc_attr($a['type']) . '">' . $content . '</div>';
}
add_shortcode( 'block', 'block_gen' );

?>
