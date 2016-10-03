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
'souryz' => 'Souryz',
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
'header' => [
        'trips' => 'Trips',
        'blog' => 'Blog',
        'sign_in' => 'Sign In',
        'cart' => 'Cart',
        'sign_in_here' => 'Sign in here if you have an account',
        'remember_me' => 'Remember me',
        'forgot_password' => 'I forgot my password',
        'access_code' => 'Sign up with your access code',
        'email_reset' => 'Enter email to reset password',
        'back' => 'Back',
        'access_code_send' => 'Sign up with Access Code',
        'my_booking' => 'My Bookings',
        'logout' => 'Logout',
        'profile' => 'Profile',
        'account' => 'Account',
    ],
'footer' => [
        'trip' => 'trip',
        'shoes' => 'shoes',
        'about' => 'About',
        'contact' => 'Contact',
        'support' => 'Support',
        'copy_right' => '© 2016 TripShoes Pty Ltd. All rights reserved.',
    ],
'booking' => [
        'past_booking' => 'Past Bookings',
        'date_of_trip' => 'Date of Trip',
        'time' => 'Time',
        'number_of_tickets' => 'Number of Tickets Purchased',
        'trip_type' => 'Trip Type',
        'note' => 'Note: Please be at your starting location no later than 10 minutes before your trip begins.',
        'about' => 'About',
        'your_host' => 'Your Host',
        'reviews' => 'Reviews',
        'starting_location' => 'Starting Location',
        'back_to_trips' => 'Back to Trips',
    ],
'about' =>[
        'a_few_words' => 'A few words',
        'about_us' => 'About Us',
        'about_header' => 'TripShoes was founded in 2016 in Melbourne, Australia. Spearheaded by entrepreneurs from Vietnamese Australian backgrounds, TripShoes aims to bring greater empathy, understanding, homour and heart to the travel experience. Feel free to contact us for any questions.',
        'contact_us' => 'Contact Us',
        'about_end' => 'The TripShoes team believes that all trips will be better if there were more of the following: more humour, more history, more hope. By incorporating digital technology with persionalisted stories, we aim to bring you all of the above.',
    ],
'mail' => [
        'mail1' => 'We sent you an access code. Please click to this',
        'mail_link' => 'link sign up with access code',
        'mail2' => 'and input access code if you want to register.',
        'mail_end' => 'Your access code is',
    ],
'support' => [
        'support_header' => 'Frequently Asked Question',
        '1' => '1',
        'support_1' => 'WILL THERE BE A LIVE GUIDE WITH ME AT ALL TIME',
        '2' => '2',
        'support_2' => 'HOW LONG DO MOST TRIPS LAST FOR?',
        '3' => '3',
        'support_3_1' => 'WHAT IF I RUN OUT OF BATTERIES ON MY PHONE MID-TRIP?',
        'support_3_2' => "Return are subject to the merchant's return policy. Please contact the merchant if you would like to return you item(s). Affirm will only issue you a refund if the merchant receives your returned items and process refund within 120 days from the day of purchase. We will credir any payments you have made on your loan, up to the amount of the refund, to the original form of payment within 3 to 10 business days of the refund. If, however, the merchant issues you store credit, you will still be responsible for repaying your loan.",
        '4' => '4',
        'support_4' => 'CAN I MAKE A BOOKING ON THE DAY OF TRAVEL?',
    ],
'profile' => [

    ],
'blog' => [
        'blog_header' => 'Welcome to the TripShoes Blog',

    ],
];