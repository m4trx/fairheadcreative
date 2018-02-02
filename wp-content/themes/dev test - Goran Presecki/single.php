<?php get_header(); ?>

<body <?php body_class(); ?>>
  <header>
    <nav>
      <a class="nav-logo" href="/"><?php bloginfo( 'name' ); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
  </header>

<?php while ( have_posts() ) : the_post(); ?>
<article>
  <header>
    <?php echo get_the_category_list(); ?>
    <span class="date"><?php the_date(); ?></span>
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
    <span class="author">
      <a href="<?php echo get_the_author_meta('user_url'); ?>">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> <?php the_author(); ?>
      </a>
    </span>
    <span class="author-bio">
      <?php echo get_the_author_meta('description'); ?>
    </span>
  </header>

  <main>
    <?php the_content(); ?>
  </main>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>
