<?php
get_header();
if (have_posts()) :
    while( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_date(); ?></p> | <p><?php echo get_the_category_list(', '); ?></p>
    <h2><?php the_content(); ?></h2>
<?php
    endwhile;
else:
    echo 'No posts found...';

endif;

get_sidebar();
get_footer();
?>