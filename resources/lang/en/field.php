<?php

return [
    'user'          => [
        'name' => 'User',
    ],
    'ip_address'    => [
        'name' => 'IP Address',
    ],
    'session'       => [
        'name' => 'Session',
    ],
    'items'         => [
        'name' => 'Items',
    ],
    'status'        => [
        'name'   => 'Status',
        'option' => [
            'pending'    => 'Pending Payment',
            'processing' => 'Processing',
            'on_hold'    => 'On Hold',
            'completed'  => 'Completed',
            'cancelled'  => 'Cancelled',
            'refunded'   => 'Refunded',
            'failed'     => 'Failed',
        ],
    ],
    'last_modified' => [
        'name' => 'Last Modified',
    ],
    'number'        => [
        'name' => 'Number',
    ],
    'total'         => [
        'name' => 'Total',
    ],
    'tags'          => [
        'name' => 'Tags',
    ],
    'date'          => [
        'name' => 'Date',
    ],
    'first_name'    => [
        'name'         => 'First Name',
        'instructions' => 'Specify the customers first name.',
    ],
    'last_name'     => [
        'name'         => 'Last Name',
        'instructions' => 'Specify the customers last name.',
    ],
    'slug'          => [
        'name'         => 'Slug',
        'instructions' => 'The slug can be used when referring to this group via API.',
    ],
    'description'   => [
        'name'         => 'Description',
        'instructions' => 'Briefly describe this customer group.',
    ],
    'email'         => [
        'name'         => 'Email',
        'instructions' => 'Specify the customers primary email.',
    ],
    'company'       => [
        'name'         => 'Company',
        'instructions' => [
            'customers' => 'Specify the customers company name.',
        ],
    ],
    'phone'         => [
        'name'         => 'Phone',
        'instructions' => [
            'customers' => 'Specify the customers primary email.',
        ],
    ],
    'address1'      => [
        'name'         => 'Address 1',
        'instructions' => 'Specify the street address.',
    ],
    'address2'      => [
        'name'         => 'Address 2',
        'instructions' => 'Specify the address apt., suite, etc.',
    ],
    'city'          => [
        'name'         => 'City',
        'instructions' => 'Specify the city for this address.',
    ],
    'state'         => [
        'name'         => 'State/Region',
        'instructions' => 'Specify the state/region for this address.',
    ],
    'postal_code'   => [
        'name'         => 'ZIP/Postal Code',
        'instructions' => 'Specify the zip/postal code for this address.',
    ],
    'country'       => [
        'name'         => 'Country',
        'instructions' => 'Specify the country for this address.',
    ],
];
