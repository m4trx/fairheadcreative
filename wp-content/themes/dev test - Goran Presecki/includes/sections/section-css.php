<section class="content-css" id="css">
  <div class="content-container">
    <h2>CSS test <span class="title-under">with a bit of HTML thrown in <br>Everything you may need is in _sections.scss file.</span></h2>
    <article>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/css-markup.png">
      <h2>Part one</h2>
      <p>Modify <strong>markup only, without touching the css</strong> in order to get perfect overlapping with the underlaying image (click the button) at screen resolutions bigger than 1280px width. This needs to work in Chrome. There's also something semantically wrong with this section's markup. Fix it.</p>
      <p><a href="javascript:void(0);" class="button" data-toggle-trigger="overlay">Click me!</a></p>
    </article>
    <article>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/css-tweak.png">
      <h2>Part two</h2>
      <ol>
        <li>Check the page in other modern browsers and fix <strong>if needed</strong>, so that the underlaying image overlaps as close as possible <strong>without breaking Chrome.</strong></li>
        <li>Change the layout of this section from float-based to grid without messing the preview.</li>
      </ol>
    </article>
    <article>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/css-responsive.png">
      <h2>Part three</h2>
      <p>(bonus round): Mobile and tablet should look presentable. Improvise.</p>
    </article>
    <div class="section-icon"><?php get_template_part('includes/svg/css'); ?></div>
  </div>
</section>
