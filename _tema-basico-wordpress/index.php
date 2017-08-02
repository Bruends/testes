<?php get_header(); ?>
  
  <div class='center'>
    <!-- loop que mostra todos os posts disponiveis  -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <div class='post'>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>"> ler mais </a>
      </div>

    <?php endwhile; endif; ?>
  </div>
<?php get_footer(); ?>
