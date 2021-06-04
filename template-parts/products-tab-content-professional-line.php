<div class="product-categories">

    <ul class="product-categories-list">

        <li class="js-filter-item-pro"><a href="<?php home_url(); ?>"><?php _e('All', 'top-dog') ?></a></li>

        <?php
        $cat_args = array(
            'hide_empty' => 0,
            'taxonomy'  => 'product-cat',
            // 'option_all' => 'All'
        );

        $categories = get_categories($cat_args);

        foreach ($categories as $cat) :

            if ($cat->parent == 17) : ?>

                <li class="js-filter-item-pro">
                    <a data-categorypro="<?php echo $cat->term_id; ?>" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo $cat->name ?></a>
                </li>

            <?php endif; ?>

        <?php endforeach; ?>

    </ul>

</div>


<div class="products-filter js-filter-pro">

    <?php

    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);

    ?>

    <div id="products-professional-slider" class="products-filter-slider">

        <?php if ($query->have_posts()) : ?>

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <?php $product_budge = get_field('product_badge'); ?>

                <div class="product-slider-single-wrapper">

                    <div class="product-slider-single-content">

                        <?php if ($product_budge) : ?>

                            <div class="product-badge">

                                <?php echo file_get_contents($product_budge['url']); ?>

                            </div>

                        <?php endif; ?>

                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">

                        <h3 class="product-single-title"><?php the_title(); ?></h3>

                    </div>

                </div>

            <?php endwhile; ?>

        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <!-- <div class="arrows arrows-pro"> -->

    <!-- <ul> -->

    <span class="prev-pro"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-prev.svg') ?></span>

    <span class="next-pro"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-next.svg') ?></span>

    <!-- </ul> -->

    <!-- </div> -->

</div>