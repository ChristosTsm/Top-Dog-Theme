<?php

add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{

    $category = $_POST['category'];


    $args = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'tagbbt',
                'field'    => 'term_id',
                'terms'    => array(90, 89),
            ),
        ),
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

    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();

            the_title('<h4>', '</h4>');

        endwhile;

    endif;
    wp_reset_postdata();


    die();
}
