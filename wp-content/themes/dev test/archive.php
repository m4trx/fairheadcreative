<?php get_header(); ?>

<article>
  <header>
    <?php
      the_archive_title( '<h1>', '</h1>' );
      the_archive_description( '<p>', '</p>' );
    ?>
  </header>

  <main>
    <?php while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">

        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
      </a>
    <?php endwhile; ?>

    <div class="pagination">
      <p><?php posts_nav_link('&nbsp;','&larr; Newer','Older &rarr;'); ?></p>
    </div>
  </main>
</article>

<div class="fixed">
  <div class="inner">
    <aside>
      <h2>Want more like this?</h2>
      <p>You are too smart &amp; too skilled to be <strong>chasing</strong> clients all day.</p>
      <p>Let us help.</p>
      <p><a href="/">Start attracting more clients</a>
    </aside>
  </div>
</div>

<?php
get_footer(); ?>
