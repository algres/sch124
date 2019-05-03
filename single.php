<?php get_header(); ?>

<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class = "page-article"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><div class="article"><?php the_content();?></div></article>
            <?php endwhile;?>
            <?php else: ?>
            <?php endif; ?>
</div>
<?php get_footer();?>