<?php
//get_header(); ?>
<div id="content">
    <main>
        <div id='news-box'>
    <?php
    $the_query = new WP_Query(array(
            'author_name' => 'ugyen', 
            'category_name' => 'blog', 
            'tag' => 'IT', 
            'post_type' => 'page'
            ) );
    if ($the_query->have_posts()) :
        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="news">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'thmbsiz', array( 'class' => 'aligncenter' ) ); ?>
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