<?php

$prefix = '';

$meta_boxes[] = [
    'title'          => __( 'Cars Settings', 'wpfc-cars' ),
    'id'             => 'cars-settings',
    'settings_pages' => ['cars-settings-page'],
    'fields'         => [
        [
            'name'   => __( 'Currency', 'wpfc-cars' ),
            'id'     => $prefix . 'currency',
            'type'   => 'group',
            'fields' => [
                [
                    'name'        => __( 'Symbol', 'wpfc-cars' ),
                    'id'          => $prefix . 'symbol',
                    'type'        => 'text',
                    'std'         => '€',
                    'placeholder' => __( '€', 'wpfc-cars' ),
                    'size'        => 3,
                ],
                [
                    'name'        => __( 'Position of the symbol', 'wpfc-cars' ),
                    'id'          => $prefix . 'position_of_the_symbol',
                    'type'        => 'select',
                    'options'     => [
                        'before' => __( 'Before', 'wpfc-cars' ),
                        'after'  => __( 'After', 'wpfc-cars' ),
                    ],
                    'std'         => 'after',
                    'placeholder' => __( 'After', 'wpfc-cars' ),
                ],
            ],
        ],
        [
            'name'   => __( 'Units', 'wpfc-cars' ),
            'id'     => $prefix . 'units',
            'type'   => 'group',
            'fields' => [
                [
                    'name'        => __( 'Distance', 'wpfc-cars' ),
                    'id'          => $prefix . 'distance',
                    'type'        => 'text',
                    'std'         => 'km',
                    'placeholder' => __( 'km', 'wpfc-cars' ),
                    'size'        => 3,
                ],
                [
                    'name'        => __( 'Length and width', 'wpfc-cars' ),
                    'id'          => $prefix . 'length_and_width',
                    'type'        => 'text',
                    'std'         => 'cm',
                    'placeholder' => __( 'cm', 'wpfc-cars' ),
                    'size'        => 3,
                ],
                [
                    'name'        => __( 'Weight', 'wpfc-cars' ),
                    'id'          => $prefix . 'weight',
                    'type'        => 'text',
                    'std'         => 'kg',
                    'placeholder' => __( 'kg', 'wpfc-cars' ),
                    'size'        => 3,
                ],
            ],
        ],
    ],
];