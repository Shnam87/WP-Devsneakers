<?php
get_header(); ?>

<div class="hero-div">

    <?php the_post_thumbnail("full", array("class" => "hero-image")); ?>

    <?php if (!is_front_page()) : ?>

        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>

    <?php endif; ?>
</div>

<div class="the-content">
    <?php the_content(); ?>
</div>

<?php get_template_part('template-parts/news'); ?>

<?php
get_footer();
