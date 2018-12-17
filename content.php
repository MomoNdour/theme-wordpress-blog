<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <!-- Affichage de la date, de l'auteur, des commentaires ... Les postmetadata--->
        <p class="blog-post-meta">
            <?php the_date(); ?> par <a href="#"><?php the_author(); ?></a>
            Cat&eacute;gorie: 
            <?php the_category(', ') ?> | 
            <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> 
            <?php edit_post_link('Editer', ' &#124; ', ''); ?>
        </p>
    <div>
        <?php the_content(); ?>
    </div>
    <div class="comments-template">
        <?php comments_template(); ?>
    </div>
</div><!– /.blog-post –>