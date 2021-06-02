<section id="td-product-lines">

    <div class="product-lines-wrapper">

        <div class="product-lines grid grid-col-2 col-gap-l">

            <div class="product-lines-text-wrapper">

                <div class="product-lines-text-title">

                    <h2><?php _e('Product Lines', 'top-dog'); ?></h2>

                    <div class="product-lines-text">

                        <?php the_field('product_lines_text') ?>

                    </div>

                </div>

                <div class="product-tabs-cta">

                    <a href="<?php echo esc_url(get_field('product_lines_button_url')) ?>">

                        <?php _e('See our detailed catalogue', 'top-dog'); ?>

                        <?php echo file_get_contents(get_template_directory() . './assets/images/slider-arrow-next.svg'); ?>

                    </a>

                </div>

            </div>

            <div class="product-lines-tabs-wrapper">

                <?php if (have_rows('product_lines_tabs')) : ?>

                    <div class="product-line-tabs">

                        <?php while (have_rows('product_lines_tabs')) : the_row(); ?>

                            <div class="product-line-tab-single">

                                <?php $icon = get_sub_field('icon') ?>

                                <div class="product-line-tab-header" data-tab-target="#tab-<?php echo get_row_index(); ?>">

                                    <h4>
                                        <?php echo file_get_contents($icon['url']); ?>
                                        <a href="#!"><?php the_sub_field('title'); ?></a>
                                    </h4>

                                    <div class="tab-indicator">

                                        <?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-next.svg'); ?>

                                    </div>

                                </div>

                                <div class="product-line-tab-content tab-hidden" id="tab-<?php echo get_row_index(); ?>">

                                    <?php the_sub_field('text'); ?>

                                </div>

                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>


        </div>


    </div>

</section>