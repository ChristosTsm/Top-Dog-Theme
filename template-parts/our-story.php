<section id="td-story">

    <div class="grid grid-col-half-auto items-center">

        <div class="image-wrapper">

            <?php $story_image = get_field('our_story_image'); ?>

            <img src="<?php echo $story_image['url'] ?>" alt="<?php echo $story_image['alt'] ?>">

        </div>

        <div class="text-wrapper our-story-text-wrapper">

            <h2><?php _e('Our Story', 'top-dog') ?></h2>

            <?php if (have_rows('our_story_slides')) : ?>

                <div class="our-story-slider">

                    <?php while (have_rows('our_story_slides')) : the_row(); ?>

                        <div class="our-story-slider-slide">

                            <?php the_sub_field('slide_content') ?>

                        </div>


                    <?php endwhile; ?>

                </div>

                <div class="arrows">

                    <ul>

                        <li class="prev"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-prev.svg') ?></li>

                        <li class="next"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-next.svg') ?></li>

                    </ul>

                </div>

            <?php endif; ?>

        </div>

    </div>

</section>