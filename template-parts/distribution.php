<section id="td-distribution">

    <div class="grid grid-col-2">

        <div class="distribution-text-wrapper">

            <div class="distribution-text">

                <h2><?php _e('Distribution', 'top-dog'); ?></h2>

                <?php if (have_rows('distribution')) : ?>

                    <?php while (have_rows('distribution')) : the_row(); ?>

                        <div class="distribution-single">

                            <h3><?php the_sub_field('title'); ?></h3>

                            <?php the_sub_field('text') ?>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </div>

        <div class="distribution-image-wrapper">
            <?php $dist_image = get_field('distribution_image'); ?>

            <img src="<?php echo esc_url($dist_image['url']); ?>" alt="<?php echo $dist_image['alt'] ?>">

        </div>

    </div>

</section>