<?php
get_header(); ?>

<main id="content" class="site-content">
  <?php if (is_front_page() || is_page('contact')): ?>
    <div id="starry-background"></div>
  <?php endif; ?>
  <?php if (is_front_page()): ?>
    <div id="my-name">Suzy Easton</div>
    <div id="player-start">PLAYER 1</div>
    <div id="click-hint">Click "Player 1" to start</div>
    <div id="scoreboard-container"></div>
  <?php endif; ?>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
          <?php if (is_page('Suzy\'s Online 80s Video Game')): ?>
            <div id="bio-text"></div>
            <canvas id="skyline-canvas"></canvas>
            <button id="start-game-button" style="display:none;">Let's goooooooo</button>
          
          <?php elseif (is_page('level-1-metrotown-mall')): ?>
            <canvas id="skyline-canvas"></canvas>
          <?php endif; ?>
          <?php the_content(); ?>
        </div>
      </article>

    <?php endwhile;
  else :
    get_template_part('template-parts/content', 'none');
  endif;
  ?>
</main>

<?php if (is_page('level-1-metrotown-mall') || is_page('Suzy\'s Online 80s Video Game')): ?>
  <?php
    $skyline_script_path = get_template_directory_uri() . '/js/skyline.js';
  ?>
  <script src="<?php echo esc_url($skyline_script_path); ?>"></script>
<?php endif; ?>

<?php get_footer(); ?>
