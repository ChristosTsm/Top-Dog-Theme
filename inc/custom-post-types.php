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
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
            'taxonomies' => array('product-cat')

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'top_dog_product_custom_post_type');


// create Taxonomy for Custom Post Type
add_action('init', 'crunchify_create_deals_custom_taxonomy', 0);

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy()
{

    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' =>  __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Categories'),
        'update_item' => __('Update Categories'),
        'add_new_item' => __('Add New Categories'),
        'new_item_name' => __('New Categories Name'),
        'menu_name' => __('Categories'),
        'show_in_rest' => true,

    );

    register_taxonomy('product-cat', array('products'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product-cat'),
        'show_in_rest' => true,

    ));
}
