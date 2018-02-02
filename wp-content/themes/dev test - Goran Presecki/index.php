<?php get_header(); ?>

<main class="group group-alt">

  <div class="blog-system-buzz">
    <div class="blog-content">
      <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="card card-article">
          <div class="card-image" style="background-image: url('<?php the_post_thumbnail_url(thumbnail); ?>')">

          </div>
          <div class="card-content">
            <h2 class="card-headline"><?php the_title(); ?></h2>
            <div class="card-description"><?php the_excerpt(); ?></div>
            <div class="meta">
              <span class="author">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> <?php the_author(); ?>
              </span>
              <span class="date">
                • <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
              </span>
            </div>
          </div>
        </a>

      <?php endwhile; ?>

      <div class="pagination">
        <p><?php posts_nav_link('&nbsp;','&larr; Newer','Older &rarr;'); ?></p>
      </div>
    </div>
    <div class="blog-sidebar">
      <div id="info-about" class="card card-info">
        <div class="card-content">
          <h2 class="card-headline">This is about X</h2>
          <p>This is a description that goes inside an info card.</p>
          <img src="http://placehold.it/500x300">
          <p>This is a description that goes inside an info card. This is a description that goes inside an info card.</p>
          <p><a href="/" class="button">Button</a></p>
        </div>
      </div>

      <div id="info-subscribe" class="card card-info">
        <div class="card-content">
          <h2 class="card-headline">Subscribe</h2>
          <p>This is a description that goes inside an info card.</p>
          <?php get_template_part('includes/subscribe'); ?>
        </div>
      </div>
    </div>
  </div>
</main>


<section class="group">

  <div class="blog-system-timeline">
    <div class="blog-content">
      <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="card card-feature">
          <div class="card-image" style="background-image: url('<?php the_post_thumbnail_url(thumbnail); ?>')">

          </div>
          <div class="card-content">
            <h2 class="card-headline"><?php the_title(); ?></h2>
            <div class="card-description"><?php the_excerpt(); ?></div>
            <div class="meta">
              <span class="author">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> <?php the_author(); ?>
              </span>
              <span class="date">
                • <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
              </span>
            </div>
          </div>
        </a>

      <?php endwhile; ?>

      <div class="pagination">
        <p><?php posts_nav_link('&nbsp;','&larr; Newer','Older &rarr;'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
