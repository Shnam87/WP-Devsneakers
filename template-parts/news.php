<h1> Nyheter </h1>

<div class="post-block-container">

    <?php
    $the_query = new WP_Query(array(
        'posts_per_page' => 4,
    ));
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php get_template_part('template-parts/news-block-mini'); ?>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php endif; ?>

</div>