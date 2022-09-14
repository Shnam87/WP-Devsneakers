<?php /* Template Name: Page Template */ ?>

<?php get_header(); ?>

<div class="page-header">
    <div class="page-header-content">

        <h1 class="title-of-page">
            <?php the_title(); ?>
        </h1>

        <div class="post-image">
            <?php the_post_thumbnail('large') ?>
        </div>

    </div>
</div>
<div class="page-content">

    <?php the_content(); ?>

</div>

<?php get_footer(); ?>