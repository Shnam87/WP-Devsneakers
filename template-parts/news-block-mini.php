<div class="post-block-mini">

    <div class="post-img">

        <?php the_post_thumbnail('thumbnail') ?>

    </div>

    <div class="post-container">
        <div class="post-title">
            <h3>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h3>

            <span class="post-day">
                <?php the_time(get_option('date_format')); ?>
            </span>
        </div>
        <div class="post-excerpt">
            <p>
                <?php the_excerpt(); ?>
            </p>

            <a href="<?php the_permalink(); ?>"> Läs mer ... </a>
        </div>
    </div>

</div>