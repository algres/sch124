<?php get_header(); ?>
<div class = "main">	
<div class = "main-container">
   <div class="container">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 465 ); } ?>
    </div>
	<script src="jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" href="jquery.mCustomScrollbar.css">
    <div class="container">
       <div class="about-us">
           <h1>О нас</h1>
           <p class="about-text">
               <?php bloginfo('description');?>
           </p>
        <div class="main-content">
        <div class="article-container">
            <h1>Новини</h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class = "main-article"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><div class="article news-article"><?php the_post_thumbnail('full'); ?><?php the_excerpt(); ?></div></article>
            <?php endwhile;?>
            <?php else: ?>
            <?php endif; ?>
        </div>
<!--        <?php get_sidebar(); ?>-->
    </div>
       </div>
    </div>
</div>
	</div>
    <div class="container"><?php wp_pagenavi();  ?></div>
<?php get_footer();?>