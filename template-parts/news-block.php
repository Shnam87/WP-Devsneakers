<div class="post-block">

    <div class="post-img">

        <?php the_post_thumbnail('medium') ?>

    </div>

    <div class="post-text">
        <div class="post-name">
            <h3>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h3>

            <span class="post-date">
                <?php the_time(get_option('date_format')); ?>
            </span>
        </div>
        <div class="post-info">
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>"> Läs mer ... </a>
        </div>
    </div>

</div>