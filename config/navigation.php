<?php

$nav = [
    "General" => [
        [
            "title" => "Dashboard",
            "icon" => '<i class="menu-icon bx bx-tachometer"></i>', // Dashboard
            'route' => 'dashboard',
            'permissions' => null
        ],
    ],
    "Misc" => [
        [
            "title" => "Manajemen Users",
            "icon" => '<i class="menu-icon bx bx-user-pin"></i>', // Manajemen Users
            "submenus" => [
                [
                    'title' => 'Users',
                    'route' => 'users.index',
                    'permissions' => ['etest user view'],
                    'icon' => '<i class="menu-icon bx bx-user"></i>', // Users
                ],
                [
                    'title' => 'Roles',
                    'route' => 'roles.index',
                    'permissions' => ['etest role & permission view'],
                    'icon' => '<i class="menu-icon bx bx-shield"></i>', // Roles
                ],
            ],
        ],
    ]
];

return $nav;
