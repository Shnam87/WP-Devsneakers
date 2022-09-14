<?php
$site_url = network_site_url('/');
?>

<div class="header-container">

        <a class="header-title  <?php the_field('logo_color', 'option'); ?>" href="<?php echo $site_url; ?>">

            <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        </a>

        <div class="main-nav">
            <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
        </div>

    </div>