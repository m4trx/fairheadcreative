<?php get_header(); ?>

<body <?php body_class(); ?>>
  <header>
    <nav>
      <a class="nav-logo" href="/"><?php bloginfo( 'name' ); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
  </header>

<article>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>

  <main>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </main>
</article>

<?php get_footer(); ?>
