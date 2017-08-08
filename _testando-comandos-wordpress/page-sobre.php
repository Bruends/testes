<?php  //template name: sobre ?>

<!-- criando template para a pag sobre  -->

<!-- utilizando o plugin Advanced Custom Fields (versão free)  -->
<?php get_header(); ?>
  <p>sobre</p>
  <p>Telefone: <?php the_field('telefone'); ?></p>
  <p>Email: <?php the_field('email');  ?></p>
  <p><?php the_field('local');  ?></p>
<?php get_footer(); ?>
