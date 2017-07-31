<div id="coments" class="commentsarea">
  <!-- verifica se os comentários estão abertos  -->
  <?php  if( comments_open( ) ) : ?> 

    <!-- mostrando o numero de comentários do post  -->
    <h3><?php comments_number("Seja o primeiro a comentar !", "1 comentário" , "% comentários" )  ?></h3>

    <!-- verificando se há comentarios e mostrando -->
    <?php if( have_comments() ) : ?>
      <ol class='comment-list'>
        <?php wp_list_comments('avatar_size=60&type=comment');  ?>
      </ol>
    <?php endif;  ?>

    <!-- form para adicionar novos comentários  -->
    <div id='respond'>
      <h3>Deixe seu comentário!</h3>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class='comment-form'>
        <fieldset>
          <label for="author">Nome: </label>
          <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
          <br>
          <label for="email">Email: </label>
          <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
          <br>
          <label for="comment">Mensagem: </label><br>
          <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
          <input type="submit" class="commentsubmit" value="Enviar Comentário">

          <?php comment_id_fields(); ?>
          <?php do_action('comment_form', $post->ID); ?>
        </fieldset>
      </form>
    </div>
    
  <?php else : _e('Comentarios fechados !'); endif; ?>  
</div>