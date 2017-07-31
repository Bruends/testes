<!-- pagina que renderiza o conteudo do Post  -->

<?php get_header(); ?>

  <!-- ativando post atual   -->
  <?php the_post(); ?>

  <!-- mostrando conteudo do post  -->
  <div class='center'>
    <?php the_title(); ?>
    <?php the_content(); ?>
  </div>

  <!-- mostrando template de comentários  -->
  <div class='center'>
    <?php comments_template( ); ?>
  </div>

<?php get_footer(); ?>