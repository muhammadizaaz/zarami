<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'manager' => [
            'profile' => 'r,u',
            'production'=> 'c,r,u,d',
            'marketing'=> 'c,r,u,d',
            'finanace'=>'c,r,u,d',
        ],

        'staff' => [
            'profile' => 'r,u',
            'production'=> 'r,u',
            'marketing'=> 'r,u',
            'finanace'=>'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
