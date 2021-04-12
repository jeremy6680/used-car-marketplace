<?php

    $prefix = '';

    $meta_boxes[] = [
        'title'      => __( 'Product Details', 'wpfc-cars' ),
        'id'         => 'product-details',
        'post_types' => ['car'],
        'context'    => 'side',
        'fields'     => [
            [
                'name'    => __( 'Brand', 'wpfc-cars' ),
                'id'      => $prefix . 'brand',
                'type'    => 'text',
                'columns' => 6,
            ],
            [
                'name'    => __( 'Model', 'wpfc-cars' ),
                'id'      => $prefix . 'model',
                'type'    => 'text',
                'columns' => 6,
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
                'columns' => 4,
            ],
            [
                'name'    => __( 'KM', 'wpfc-cars' ),
                'id'      => $prefix . 'km',
                'type'    => 'number',
                'columns' => 4,
            ],
            [
                'name'    => __( 'Price', 'wpfc-cars' ),
                'id'      => $prefix . 'price',
                'type'    => 'number',
                'columns' => 4,
            ],
            [
                'name'    => __( 'Width', 'wpfc-cars' ),
                'id'      => $prefix . 'width',
                'type'    => 'number',
                'columns' => 4,
            ],
            [
                'name'    => __( 'Length', 'wpfc-cars' ),
                'id'      => $prefix . 'length',
                'type'    => 'number',
                'columns' => 4,
            ],
            [
                'name'    => __( 'Weight', 'wpfc-cars' ),
                'id'      => $prefix . 'weight',
                'type'    => 'number',
                'columns' => 4,
            ],
            [
                'name' => __( 'Description', 'wpfc-cars' ),
                'id'   => $prefix . 'description',
                'type' => 'wysiwyg',
            ],
            [
                'name'       => __( 'Product Images', 'wpfc-cars' ),
                'id'         => $prefix . 'product_images',
                'type'       => 'image_advanced',
                'image_size' => 'large',
            ],
        ],
    ];

    