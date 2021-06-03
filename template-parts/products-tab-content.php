<div class="product-categories">

    <ul>

        <?php
        $cat_args = array(
            'hide_empty' => 0,
            'taxonomy'  => 'product-cat'
        );

        $categories = get_categories($cat_args);

        foreach ($categories as $cat) :

            if ($cat->parent == 18) : ?>

                <li class="js-filter-item">
                    <a data-category="<?php echo $cat->term_id; ?>" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo $cat->name ?></a>
                </li>

            <?php endif; ?>

        <?php endforeach; ?>

    </ul>

</div>


<div class="products-filter js-filter">

    <?php

    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();

            the_title('<h4>', '</h4>');

        endwhile;

    endif;
    wp_reset_postdata();
    ?>

</div>