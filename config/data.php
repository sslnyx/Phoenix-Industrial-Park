<?php
return [
    'slides' => [
        'intro' => [
            'name' => 'home',
        ],
        'highlights' => [
            'name' => 'building highlights',
        ],
        'location' => [
            'name' => 'location',
        ],
        'floorplans' => [
            'name' => 'floorplans',
        ],
        'contact' => [
            'name' => 'contact us',
        ],

        'register' => [
            'name' => 'register',
        ],
    ],

    'features' => [
        '2 Buildings<br/>(48,000 SF)',
        '40’ ceilings',
        'Option to combine units',
        'Loading areas',
        'Security light fixture',
        'Parking',
        'Accessibility',
        'Washrooms',
        'Lighting',
    ],

    'plans' => [
        '101' => '13,928',
        '102' => '10,563',
        '201' => '9,710',
        '202' => '11,402',
    ],

    'form' => [
        'firstName' => [
            'type' => 'text',
            'ph' => 'First Name'
        ],
        'lastName' => [
            'type' => 'text',
            'ph' => 'Last Name'
        ],
        'email' => [
            'type' => 'email',
            'ph' => 'Email'
        ],
        'phone' => [
            'type' => 'phone',
            'ph' => 'Phone'
        ],
        'plans' => [
            'req' => true,
            'type' => 'select',
            'ph' => 'What unit are you interested in?',
            'option' => [
                '101' => '13,928',
                '102' => '10,563',
                '201' => '9,710',
                '202' => '11,402',
            ],
        ],
        'where' => [
            'req' => false,
            'type' => 'select',
            'ph' => 'How did you hear about us?',
            'option' => [
                'Signage',
                'Online',
                'Google Search',
                'Ads',
                'Friend / Family',
            ],
        ],

    ],
]

?>
