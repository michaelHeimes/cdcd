<?php
// Register menus
register_nav_menus(
	array(
		'util-nav'		=> __( 'The Utility Menu', 'jointswp' ),		// Utility nav in header
		'main-nav'		=> __( 'The Main Menu', 'jointswp' ),		// Main nav in header
		'offcanvas-nav'	=> __( 'The Off-Canvas Menu', 'jointswp' ),	// Off-Canvas nav
		'footer-links'	=> __( 'Footer Links', 'jointswp' ),		// Secondary nav in footer	
	)
);

// The Utility Menu
function joints_util_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'utility-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'util-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Top Menu
function joints_top_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-hover-delay="0" data-closing-time="0" data-smooth-scroll data-offset="500">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

// The Off Canvas Menu
function joints_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> 'offcanvas-nav',					// Adding custom nav id
		'menu_class'		=> 'vertical menu accordion-menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

// The Footer Menu
function joints_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'footer-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'		=> true,
		'menu_class'	=> '',		// Adding custom nav class
		'include'		=> '',
		'exclude'		=> '',
		'echo'			=> true,
		'link_before'	=> '',		// Before each link
		'link_after'	=> ''		// After each link
	));
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );







// Add ACF Fields to Main Nav



	function my_wp_nav_menu_objects( $items, $args ) {
		
		// var_dump($args);
		
		if ( $args->theme_location == 'main-nav') {
			
			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('icon', $item);
				$bg_img = get_field('dropdown_background_image', $item);
				$size = 'full';
				$imgArr = wp_get_attachment_image_src( $bg_img, $size );
						
				// append icon
				if( $icon ) {
					
					$item->title = '<span class="title-icon-wrap"><span class="icon" aria-hidden="true">' . wp_get_attachment_image( $icon, $size ) . '</span>' . $item->title . '</span>';
					
				}
				
				// append bg image
				if( $bg_img ) {
					
					$item->title = '<div class="bg" style="background-image: url(' . $imgArr[0] . ')"></div><span class="title-icon-wrap">' . $item->title . '</span>';
					
				}	
				
			}
			
			
			// return
			return $items;
			
		} elseif ( $args->theme_location != 'main-nav' && 'main-navigation' !== $args->menu->slug && $args->theme_location != 'social-links' && $args->theme_location != 'review-links') {
			
			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('icon', $item);
				$blue_icon = get_field('icon_blue', $item);
				$size = 'full';
				$imgArr = wp_get_attachment_image_src( $bg_img, $size );
						
				// append icon
				if( $icon ) {
					
					$item->title = '<span class="title-icon-wrap"><span class="icon orange" aria-hidden="true">' . wp_get_attachment_image( $icon, $size ) . '</span><span class="icon blue" aria-hidden="true">' . wp_get_attachment_image( $blue_icon, $size ) . '</span>' . $item->title . '</span>';
					
				}
				
			}
			
			
			// return
			return $items;
				
		} elseif ( $args->theme_location == 'social-links' || 'main-navigation' != $args->menu->slug && $args->theme_location == 'review-links' ) {

			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('icon', $item);
				$size = 'full';
						
				// append icon
				if( $icon ) {
					
					$item->title = '<span class="icon" aria-hidden="true">' . wp_get_attachment_image( $icon, $size ) . '</span><span class="show-for-sr"' . $item->title . '</span>';
					
				}
				
			}
			
			
			// return
			return $items;			
			
		} else {			
			// loop
			foreach( $items as &$item ) {}
			return $items;	
		}
		
	}
	
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);



// add hook that shows submenu of parent link
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );

// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;
    
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }
    
    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          } 
        }
      }
    }

    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }
    
    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}
























