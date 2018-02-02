<nav class="nav-main" role="navigation" id="top" data-toggle-target="menu">
  <div class="container">
    <div class="logo">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
      </a>
    </div>
    <ul>
      <li>
        <a href="<?php echo site_url(); ?>">ITEM NAV</a>
      </li>
      <li>
        <a href="<?php echo site_url(); ?>">VAN MITE</a>
      </li>
    </ul>
    <div class="togglers-mobile">
      <span class="button button-gray" data-toggle-trigger="menu"><span class="tiny-off">Menu </span><span class="minus"></span></span>
    </div>
    <div class="page-overlay" data-toggle-target="menu" data-toggle-trigger="menu"></div>
  </div>
</nav>

