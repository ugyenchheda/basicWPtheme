<?php
get_header(); ?>
<div id="content">
    <main>
        <div id='news-box'>
    <?php
    $the_query = new WP_Query(array(
        'category_name' => 'uncategorized',
        'orderby' => 'date',
        'order' => 'desc',
        'posts_per_page' => '3'
    ));
    if ($the_query->have_posts()) :
        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="news">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p class="date-category"><?php echo get_the_date(); ?> </p>
            <?php the_content(); ?>
    </div>
    <?php
        endwhile;
else:
    echo 'No posts found...';

endif; 
wp_reset_postdata();

?>
</div>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>