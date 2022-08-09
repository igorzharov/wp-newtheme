<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package newtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'newtheme'); ?></a>

    <header class="header">

        <div class="topline header__top-line">

            <div class="container">

                <div class="controls topline__contacts">

                    <div class="control__item"><img class="icon icon--accent"
                                                    src="/wp-content/uploads/icons/clock.svg"
                                                    alt="icon">
                        <div class="controls__text">пн-пт 08:30 - 17:00</div>
                    </div>

                    <a href="mailto:orbitacallc@gmail.com" class="control__item contacts__item--link"><img
                                class="icon icon--accent" src="/wp-content/uploads/icons/mail-01.svg"
                                alt="icon" class="controls__icon">
                        <div class="controls__text">orbitacallc@gmail.com</div>
                    </a>

                    <a href="tel:+73512111673" class="control__item"><img class="icon icon--accent"
                                                                          src="/wp-content/uploads/icons/phone.svg"
                                                                          alt="icon"
                                                                          class="controls__icon">
                        <div class="controls__text">+7 (351) 211-16-73</div>
                    </a>

                </div>

            </div>

        </div>

        <div class="middle-line header__middle-line">

            <div class="container">

                <div class="d-flex d-flex--gap d-flex--jcsb d-flex--ac">

                    <div class="header__logo">
                        <?php the_custom_logo(); ?>
                    </div>

                    <div class="main-menu header__main-menu">

                        <?php
                        wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => '', 'container' => 'nav', 'items_wrap' => '<ul><div class="main-menu__title h2">Меню:</div>%3$s</ul>'));
                        ?>
                    </div>

                    <div class="controls header__controls">

                        <div class="control__item control-search"><img src="/wp-content/uploads/icons/search-sm.svg"
                                                                       alt="icon" class="icon"></div>
                        <div class="control__item control-cart"><img src="/wp-content/uploads/icons/shopping-bag-01.svg"
                                                                     alt="icon" class="icon"></div>
                        <div class="control__item control-user"><img src="/wp-content/uploads/icons/user-circle.svg"
                                                                     alt="icon" class="icon"></div>
                        <div class="control__item control-hamburger">
                            <div class="hamburger-menu"><span></span><span></span><span></span></div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>
