<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_site_url() ?>/wp-content/themes/hello-elementor-child/style.css" />
</head>

<body <?php body_class(); ?>>

    <header class="m-header-main">
        <div class="container">
            <a href="/" class="m-logo-mobile">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                }
                ?>
                <img src="<?php echo $logo[0]; ?>" alt="Logo" />
            </a>
			<input type="checkbox" id="check__toggle" hidden />
            <label for="check__toggle" class="btn__toggle"><i class="fa-solid fa-bars"></i></label>
            <nav role="navigation" aria-label="Main Menu" class="m-nav">
				<a href="/" class="m-logo-mobile" id="m-logo-mobile-active">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }
                    ?>
                    <img src="<?php echo $logo[0]; ?>" alt="" />
                </a>
                <label for="check__toggle" class="btn__toggle_close"><i class="fa-solid fa-xmark"></i></label>
				<a href="/" class="m-logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }
                    ?>
                    <img src="<?php echo $logo[0]; ?>" alt="" />
                </a>
                <ul class="m-nav__list" id="m-nav__list__desktop">
                    <?php
                    $menu_items = wp_get_nav_menu_items('main_menu');
                    if ($menu_items) {
                        foreach ($menu_items as $menu_item) {
                            $has_children = in_array('menu-item-has-children', $menu_item->classes);

                            echo '<li' . ($has_children ? ' class="menu-item-has-children menu-item"' : ' class="menu-item"') . '>';
                            echo '<a href="' . esc_url($menu_item->url) . '"><span>' . esc_html($menu_item->title) . '</span></a>';

                            if ($has_children) {
                                echo '<ul class="sub-menu">';
                                foreach ($menu_items as $child_menu_item) {
                                    if ($child_menu_item->menu_item_parent == $menu_item->ID) {
                                        echo '<li class="menu-item"><a href="' . esc_url($child_menu_item->url) . '"><span>' . esc_html($child_menu_item->title) . '</span></a></li>';
                                    }
                                }
                                echo '</ul>';
                            }

                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
                <ul class="m-nav__list" id="m-nav__list__all">
                    <?php
                        $menu_items = wp_get_nav_menu_items('main_menu');
                        if ($menu_items) {
                            foreach ($menu_items as $menu_item) {
                                $has_children = in_array('menu-item-has-children', $menu_item->classes);

                                echo '<li' . ($has_children ? ' class="menu-item-has-children menu-item"' : ' class="menu-item"') . '>';
                                echo '<a href="' . esc_url($menu_item->url) . '"><span>' . esc_html($menu_item->title) . '</span></a>';

                                if ($has_children) {
                                    echo '<ul class="sub-menu">';
                                    foreach ($menu_items as $child_menu_item) {
                                        if ($child_menu_item->menu_item_parent == $menu_item->ID) {
                                            echo '<li class="menu-item"><a href="' . esc_url($child_menu_item->url) . '"><span>' . esc_html($child_menu_item->title) . '</span></a></li>';
                                        }
                                    }
                                    echo '</ul>';
                                }

                                echo '</li>';
                            }
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="gap-menu"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector(".m-header-main");
            header.classList.toggle('active', window.scrollY > 0);
        })
    </script>