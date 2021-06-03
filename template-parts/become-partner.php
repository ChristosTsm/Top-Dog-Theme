<?php $partner_image = get_field('partner_image'); ?>

<section id="td-partner">

    <div class="grid grid-col-partner ">

        <div class="partner-image">

            <img src="<?php echo esc_url($partner_image['url']); ?>" alt="<?php echo $partner_image['alt'] ?>">

        </div>

        <div class="partner-info">

            <h2><?php _e('Become a partner'); ?></h2>

            <h4><?php _e('Partnership Options'); ?></h4>

            <?php if (have_rows('partnership_options')) : ?>

                <?php $num = 1; ?>

                <div class="partnership-options">

                    <?php while (have_rows('partnership_options')) : the_row(); ?>

                        <div class="partnership-options-single">

                            <span><?php echo '0' . $num; ?>.</span>
                            <?php the_sub_field('text'); ?>

                        </div>


                    <?php $num++;
                    endwhile; ?>

                </div>

            <?php endif; ?>

            <div class="partnership-chars">

                <h5><?php the_field('partnership_characteristics_title'); ?></h5>

                <?php if (have_rows('partnership_chars')) : ?>

                    <ul class="partnership-chars-list-wrapper">

                        <?php while (have_rows('partnership_chars')) : the_row();  ?>

                            <li class="partnership-chars-list-single">

                                <h6><?php the_sub_field('title'); ?></h6>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>