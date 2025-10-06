<?php
/**
 * Header file for BigBag theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
  <div class="header__container">
    <div class="header__body">

      <!-- Логотип -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__link-logo">
        BigBag
      </a>

      <!-- Меню -->
      <nav class="header__menu menu">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu__list',
            'walker'         => new BigBag_Walker_Nav_Menu()
          ));
        ?>
        <div class="menu__buttons-container">
          <a href="#" class="menu__button button button--transparent button--mini"><span class="dashicons dashicons-email-alt"></span></a>
          <a href="#" class="menu__button button button--mini"><span class="dashicons dashicons-phone"></span></a>
        </div>
      </nav>

      <!-- Дії справа -->
      <div class="header__actions actions-header">
        <a href="#" class="actions-header__button button button--transparent button--mini"> <span class="dashicons dashicons-email-alt"></span></a>
        <a href="tel:+380991112233" class="actions-header__button button button--mini">
  <span class="dashicons dashicons-phone"></span>
</a>

        <button type="button" class="actions-header__icon-menu icon-menu"><span></span></button>
      </div>

    </div>
  </div>
</header>

