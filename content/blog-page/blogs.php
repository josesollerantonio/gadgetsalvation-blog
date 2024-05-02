 <!--obtenemos las entradas-->
 <?php
    if (have_posts()): 
        while (have_posts()):
            the_post();
            ?>
            <h2 class="titulo"> <?php the_title(); ?> </h2>
            <div class="parrafo"><?php the_content(); ?></div>
            <?php
        endwhile;
    endif;
?>