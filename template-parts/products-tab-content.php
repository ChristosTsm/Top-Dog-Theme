<div class="product-categories">
    <ul>

        <?php
        $cat_args = array(
            'type' => 'products',
            'exclude' => array(1),
            'option_all' => 'All'
        );

        $categories = get_categories($cat_args);

        foreach ($categories as $cat) : ?>

            <li>
                <a href="<?php get_category_link($cat->term_id) ?>"><?php $cat->name ?></a>
            </li>

        <?php endforeach; ?>

    </ul>
</div>


<div class="products-filter">

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