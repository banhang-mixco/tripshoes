<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
'user' => [
        'list_user' => 'Users List',
        'full_name' => 'Fullname',
        'address' => 'Address',
        'title_delete' => 'Delete User',
        'confirm' => 'Do you want delete this User ?',
        'fullname_pattern' => '[A-Za-z \t]{3,100}*\p{L}+',
        'fullname_notice' => 'firstname lastname. Ex: Phuoc. And 3->100 characters',
        'tel_pattern' => '\d{10,14}',
        'tel_notice' => 'Must contain 10->14 number',
        'address_pattern' => '[.,\-\/A-Za-z0-9 \t]{6,100}*\p{L}+',
        'address_notice' => 'Address must 6-100 characters,no special characters,except .,-/',
        'edit_fail' => 'Edit user is failed! Try Again.',
        'edit_success' => 'Edit user is successful!',
        'username_pattern' => '[A-Za-z0-9_]{3,20}',
        'username_notice' => 'must contain 3->20 character (A-Za-z0-9_),no special characters',
        'password_pattern' => '.{6,100}',
        'password_notice' => 'Password must 6-100 characters',
        'password' => 'Password',
        'username' => 'Username',        
    ],
];