<?php get_header(); ?>


<?php /* The "Blog" Page */ ?>

<div class="title-of-page"> Nyheter </div>

<?php
$the_query = new WP_Query(array(
    'posts_per_page' => 4,
));
?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php get_template_part('template-parts/news-block'); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>