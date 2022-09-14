<?php get_header(); ?>
<?php $back_link = network_site_url('/nyheter'); ?>

<div class="page-header">
    <div class="page-header-content">

        <h1 class="title-of-page">
            <?php the_title(); ?>
        </h1>

        <div class="post-image">
            <?php the_post_thumbnail('medium') ?>
        </div>

        <h3><?php the_time(get_option('date_format')); ?></h3>

    </div>
</div>
<div class="page-content">

    <h2><?php the_content(); ?></h2>

</div>
<div class="back-link">

    <a href="<?php echo $back_link; ?>" class="back-to-news"> < Tillbaka till nyheter </a>

</div>

<?php get_footer(); ?>