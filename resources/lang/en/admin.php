<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'plan' => [
        'title' => 'Plans',

        'actions' => [
            'index' => 'Plans',
            'create' => 'New Plan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'plan_name' => 'Plan name',
            'plan_price' => 'Plan price',
            'description' => 'Description',
            'employee_id' => 'Employee',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];