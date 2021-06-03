<?php

// Our custom post type function
function top_dog_product_custom_post_type()
{

    register_post_type(
        'products',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
            'taxonomies'  => array('category'),

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'top_dog_product_custom_post_type');
