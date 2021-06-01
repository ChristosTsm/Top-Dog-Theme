<section id="td-about">

    <div class="grid grid-col-1-3 items-center">

        <div class="image-wrapper">

            <?php $about_image = get_field('about_us_image'); ?>

            <img src="<?php echo $about_image['url'] ?>" alt="<?php echo $about_image['alt'] ?>">

        </div>

        <div class="text-wrapper">

            <h2><?php _e('About Us', 'top-dog') ?></h2>

            <?php the_field('about_us_text'); ?>

        </div>

    </div>

</section>