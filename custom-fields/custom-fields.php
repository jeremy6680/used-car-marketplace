<?php

    $prefix = '';

    $meta_boxes[] = [
        'title'      => __( 'Product Details', 'wpfc-cars' ),
        'id'         => 'product-details',
        'post_types' => ['car'],
        'fields'     => [
            [
                'name'       => __( 'Category', 'wpfc-cars' ),
                'id'         => $prefix . 'category',
                'type'       => 'taxonomy_advanced',
                'taxonomy'   => ['category'],
                'field_type' => 'select_tree',
            ],
            [
                'name'    => __( 'Condition', 'wpfc-cars' ),
                'id'      => $prefix . 'condition',
                'type'    => 'select',
                'options' => [
                    'Like new'   => __( 'Like new', 'wpfc-cars' ),
                    'Very good'  => __( 'Very good', 'wpfc-cars' ),
                    'Acceptable' => __( 'Acceptable', 'wpfc-cars' ),
                    'Broken'     => __( 'Broken', 'wpfc-cars' ),
                ],
                'hidden'  => [
                    'when'     => [['category', 'in', 1]],
                    'relation' => 'and',
                ],
            ],
            [
                'name'    => __( 'Payment', 'wpfc-cars' ),
                'id'      => $prefix . 'payment',
                'type'    => 'select',
                'options' => [
                    'PayPal'     => __( 'PayPal', 'wpfc-cars' ),
                    'Check'      => __( 'Check', 'wpfc-cars' ),
                    'MasterCard' => __( 'MasterCard', 'wpfc-cars' ),
                ],
            ],
            [
                'name'     => __( 'Shipping method', 'wpfc-cars' ),
                'id'       => $prefix . 'shipping_method',
                'type'     => 'select',
                'options'  => [
                    'DHL'        => __( 'DHL', 'wpfc-cars' ),
                    'ChronoPost' => __( 'ChronoPost', 'wpfc-cars' ),
                ],
                'multiple' => true,
            ],
            [
                'name' => __( 'Price', 'wpfc-cars' ),
                'id'   => $prefix . 'price',
                'type' => 'number',
            ],
            [
                'name' => __( 'Promotion Price', 'wpfc-cars' ),
                'id'   => $prefix . 'promotion_price',
                'type' => 'number',
            ],
            [
                'name' => __( 'Product Images', 'wpfc-cars' ),
                'id'   => $prefix . 'product_images',
                'type' => 'image_advanced',
                'image_size' => 'large',
            ],
            [
                'name' => __( 'Description', 'wpfc-cars' ),
                'id'   => $prefix . 'description',
                'type' => 'wysiwyg',
            ],
            [
                'name' => __( 'Brand', 'wpfc-cars' ),
                'id'   => $prefix . 'brand',
                'type' => 'text',
            ],
            [
                'name' => __( 'Quantity', 'wpfc-cars' ),
                'id'   => $prefix . 'quantity',
                'type' => 'number',
            ],
            [
                'name'          => __( 'Prices', 'wpfc-cars' ),
                'id'            => $prefix . 'prices',
                'type'          => 'group',
                'admin_columns' => [
                    'position'   => 'after',
                    'sort'       => true,
                    'searchable' => true,
                    'filterable' => true,
                ],
                'fields'        => [
                    [
                        'name' => __( 'Normal price', 'wpfc-cars' ),
                        'id'   => $prefix . 'normal_price',
                        'type' => 'number',
                    ],
                    [
                        'name' => __( 'Discounted price', 'wpfc-cars' ),
                        'id'   => $prefix . 'discounted_price',
                        'type' => 'number',
                    ],
                ],
            ],
            [
                'name'   => __( 'Width', 'wpfc-cars' ),
                'id'     => $prefix . 'width',
                'type'   => 'number',
                'hidden' => [
                    'when'     => [['category', 'in', 1]],
                    'relation' => 'and',
                ],
            ],
            [
                'name'   => __( 'Length', 'wpfc-cars' ),
                'id'     => $prefix . 'length',
                'type'   => 'number',
                'hidden' => [
                    'when'     => [['category', 'in', 1]],
                    'relation' => 'and',
                ],
            ],
            [
                'name'   => __( 'Weight', 'wpfc-cars' ),
                'id'     => $prefix . 'weight',
                'type'   => 'number',
                'hidden' => [
                    'when'     => [['category', 'in', 1]],
                    'relation' => 'and',
                ],
            ],
            [
                'name' => __( 'Product Image', 'wpfc-cars' ),
                'id'   => $prefix . 'product_image',
                'type' => 'single_image',
            ],
        ],
    ];

    return $meta_boxes;
