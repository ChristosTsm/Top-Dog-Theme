<?php

add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{

    $category = $_POST['category'];


    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
    );

    if (isset($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product-cat',
                'field'    => 'term_id',
                'terms'    => array($category),
            ),
        );
    }

    $query = new WP_Query($args); ?>

    <div class="products-filter-slider home-use-slider">

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

    <!-- <div class="arrows arrows-home"> -->

    <!-- <ul> -->

    <span class="prev-home"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-prev.svg') ?></span>

    <span class="next-home"><?php echo file_get_contents(get_template_directory() . '/assets/images/slider-arrow-next.svg') ?></span>

    <!-- </ul> -->

    <!-- </div> -->
<?php die();
}
