<?php
get_header(); ?>
<div id="content">
    <main>
    <?php
    if (have_posts()) :
        while( have_posts() ) : the_post(); ?>
        <article>
            <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft' ) ); ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p class="date-category"><?php the_date(); ?> | <?php echo get_the_category_list(', '); ?></p>
            <?php the_excerpt(); ?>
        </article>
    <?php
        endwhile;
else:
    echo 'No posts found...';

endif; ?>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>